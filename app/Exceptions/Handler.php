<?php

namespace App\Exceptions;

use Exception;
use Tylercd100\LERN\Facades\LERN;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception $exception
     * @return void
     * @throws Exception
     */
    public function report(Exception $exception)
    {
        if ($this->shouldReport($exception)) {
    
            //Check to see if LERN is installed otherwise you will not get an exception.
            if (app()->bound("lern")) {
                app()->make("lern")->handle($exception); //Record and Notify the Exception
    
                /*
                OR...
                app()->make("lern")->record($exception); //Record the Exception to the database
                app()->make("lern")->notify($exception); //Notify the Exception
                */
            }
        }
        parent::report($exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['code' => 401, 'data' => null, 'error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('admin/index') || $request->is('admin/*')) {
            return redirect()->guest('/admin/login');
        }

        return redirect()->guest(route('/admin/login'));
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
//         throw $exception;
        return parent::render($request, $exception);
    }
}
