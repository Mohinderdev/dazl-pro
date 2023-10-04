<?php

namespace App\Modules\ProjectOpportunity\Features\Admin;

use App\Core\Feature;
use App\Modules\Customer\Models\Customer;
use App\Modules\Professional\Models\Professional;
use App\Modules\Project\Models\Project;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\ProjectOpportunity\Models\ProjectOpportunity;

class EditProjectOpportunityFeature extends Feature
{

    private $model;
    /**
     * EditProjectOpportunityFeature constructor.
     */
    public function __construct(ProjectOpportunity $ProjectOpportunity)
    {
        $this->model = $ProjectOpportunity;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $projects = $this->getAllProjects();
        $professionals = $this->getAllProfessionals();
        $customers = $this->getAllCustomers();
        return $this->run(RespondWithView::class, [
            'view' => 'project-opportunities::edit',
            'data' => [
                'row' => $this->model ,
                'projects' => $projects,
                'professionals' => $professionals,
                'customers' => $customers
            ]
        ]);
    }

    private function getAllProjects(){
        return Project::all();
    }

    private function getAllCustomers(){
        return Customer::all();
    }

    private function getAllProfessionals(){
        return Professional::all();
    }
}
