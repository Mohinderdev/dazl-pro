<?php

namespace App\Modules\Category\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'image'
    ];

    // relations

    public function setImageAttribute($image){
//        if ($image){
            $image = request()->file('image')->store('uploads/categories');
             $this->attributes['image'] = $image;
//        }
    }

}
