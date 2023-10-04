<?php

namespace App\Modules\ContactUs\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{

    protected $table = 'contact_us';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_name',
        'property_address',
        'company_name',
        'contact_name',
        'issue_description',
        'steps_resolve_issue',
        'issue_solution'
    ];


    // relations

    public function images(){
        return $this->hasMany(ContactUsImage::class);
    }

}
