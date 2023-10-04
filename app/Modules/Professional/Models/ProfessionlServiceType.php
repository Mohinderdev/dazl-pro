<?php

namespace App\Modules\Professional\Models;

use App\Modules\ServiceType\Models\ServiceType;
use Illuminate\Database\Eloquent\Model;

class ProfessionlServiceType extends Model
{
    protected $table= "professional_service_type";
    protected $guarded=[];
    public function service(){
        return $this->belongsTo(ServiceType::class,'service_type_id');
    }
}
