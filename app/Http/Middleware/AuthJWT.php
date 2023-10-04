<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\JWTAuth;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Contracts\Auth\Factory as Auth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class AuthJWT extends BaseMiddleware
{
    /**
     * @var JWTAuth
     */
    protected $jwtauth;


    /**
     * @var Auth
     */
    protected $auth;


    /**
     * AuthJWT constructor.
     *
     * @param  JWTAuth  $jwtauth
     * @param  Auth  $auth
     */
    public function __construct()
    {

    }


    /**
     * @param $request
     * @param  Closure  $next
     * @param  mixed  ...$guards
     *
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function handle($request, Closure $next, $guard)
    {

        if (!auth($guard)->check()) {
            return response()->json([
                'message' => 'Unauthorized '.ucwords($guard),
            ], Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}
