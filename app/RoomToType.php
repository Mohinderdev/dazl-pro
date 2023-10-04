<?php

namespace App;
//use App\Core\Feature;
use App\Modules\Feature\Models\Feature;
use Illuminate\Database\Eloquent\Model;

class RoomToType extends Model
{
    protected $guarded =[];
    public function type(){
        return $this->belongsTo(Feature::class,'type_id');
    }
}
