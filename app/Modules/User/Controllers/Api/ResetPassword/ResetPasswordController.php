<?php
namespace App\Modules\User\Controllers\Api\ResetPassword;

use App\Modules\User\Models\User;
use App\Http\Controllers\Controller;
use App\Modules\User\Features\Api\ResetPassword\CheckResetCodeFeature;
use App\Modules\User\Features\Api\ResetPassword\SendResetEmailFeature;
use App\Modules\User\Requests\Api\ResetPassword\CheckResetCodeRequest;
use App\Modules\User\Requests\Api\ResetPassword\SendResetEmailRequest;
use App\Modules\User\Requests\Api\ResetPassword\UpdatePasswordRequest;
use App\Modules\User\Features\Api\ResetPassword\ResetUserPasswordFeature;

class ResetPasswordController extends Controller
{
    private $model;

    /**
     * ResetPasswordController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * send email with reset password code.
     *
     * @param SendResetEmailRequest $request
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function sendEmail(SendResetEmailRequest $request)
    {
        $user = $this->model->where('email', $request->email)->first();

        return $this->serve(SendResetEmailFeature::class, [
            'user' => $user
        ]);
    }

    /**
     * check reset password code.
     * @param CheckResetCodeRequest $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \ReflectionException
     */
    public function checkResetCode(CheckResetCodeRequest $request)
    {
        $user = $this->model->where('email', $request->email)->first();

        return $this->serve(CheckResetCodeFeature::class, [
            'user' => $user
        ]);
    }

    /**
     * Reset user password.
     * @param UpdatePasswordRequest $request
     * @return mixed
     * @throws \ReflectionException
     */
    public function resetPassword(UpdatePasswordRequest $request)
    {
        $user = $this->model->where('email', $request->email)->first();

        return $this->serve(ResetUserPasswordFeature::class, [
            'user' => $user
        ]);
    }
}
