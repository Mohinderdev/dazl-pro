<?php

namespace App\Modules\ContactUs\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUsImage extends Model
{

    protected $table = 'contact_us_images';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contact_us_id',
        'url',
        'description'
    ];


}
