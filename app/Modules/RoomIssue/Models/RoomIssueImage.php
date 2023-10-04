<?php

namespace App\Modules\RoomIssue\Models;

use Illuminate\Database\Eloquent\Model;

class RoomIssueImage extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'project_id'
    ];

    // relations

}
