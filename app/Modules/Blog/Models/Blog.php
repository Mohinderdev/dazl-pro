<?php

namespace App\Modules\Blog\Models;

use App\Modules\BlogCategory\Models\BlogCategory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'category_id',
        'slug',
        'image',
        'description',
        'publish',
    ];

    public function blogcategoy(){
        return $this->belongsTo(BlogCategory::class,'category_id');
    }
    // relations

}
