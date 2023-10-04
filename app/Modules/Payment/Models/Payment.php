<?php

namespace App\Modules\Payment\Models;

use App\Modules\Professional\Models\Professional;
use App\Modules\Realtor\Models\Realtor;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userable_id',
        'userable_type',
        'payment_id',
        'payment_status',
        'total'
    ];

    // relations

    public function professional(){
        return $this->morphOne(Professional::class , 'userable');
    }

    public function realtor(){
        return $this->hasOne(Realtor::class , 'userable');
    }

    public function userable(){
        return $this->morphTo();
    }

    public function customer(){
        return $this->morphOne(Professional::class , 'userable');
    }

}
