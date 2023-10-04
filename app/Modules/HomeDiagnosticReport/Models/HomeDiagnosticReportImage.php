<?php

namespace App\Modules\HomeDiagnosticReport\Models;

use App\Modules\Customer\Models\Customer;
use App\Modules\Feature\Models\Feature;
use App\Modules\Professional\Models\Professional;
use App\Modules\ProjectType\Models\ProjectType;
use App\Modules\Room\Models\Room;
use App\Modules\RoomIssue\Models\RoomIssue;
use Illuminate\Database\Eloquent\Model;

class HomeDiagnosticReportImage extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url',
        'project_id',
        'description'
    ];

    // relations

}
