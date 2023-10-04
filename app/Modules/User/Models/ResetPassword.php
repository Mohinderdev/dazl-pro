<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;

class ResetPassword extends Model
{
    protected $table = "reset_passwords";

    protected $fillable = ['user_id', 'code', 'expire_at'];
}
