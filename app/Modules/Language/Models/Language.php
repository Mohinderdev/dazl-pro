<?php

namespace App\Modules\Language\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'default', 'active',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeDefault($query)
    {
        return $query->where('default', 1);
    }

}
