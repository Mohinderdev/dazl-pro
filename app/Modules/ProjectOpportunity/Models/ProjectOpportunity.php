<?php

namespace App\Modules\ProjectOpportunity\Models;

use App\Modules\Customer\Models\Customer;
use App\Modules\Professional\Models\Professional;
use App\Modules\Project\Models\Project;
use Illuminate\Database\Eloquent\Model;

class ProjectOpportunity extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message',
        'isInterested',
        'interest_date',
        'project_id',
        'customer_id',
        'professional_id'
    ];

    // relations

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function professional(){
        return $this->belongsTo(Professional::class);
    }
}
