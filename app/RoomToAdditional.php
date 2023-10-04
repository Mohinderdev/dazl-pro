<?php

namespace App;

use App\Modules\AdditionalValue\Models\AdditionalValue;
use Illuminate\Database\Eloquent\Model;

class RoomToAdditional extends Model
{
    protected $guarded =[];

public function additional(){
    return $this->belongsTo(AdditionalValue::class,'additional_values_id');
}
}
