<?php

namespace App\Modules\Project\Features\Admin;

use App\Core\Feature;
use App\Modules\Customer\Models\Customer;
use App\Modules\Professional\Models\Professional;
use App\Modules\ProjectType\Models\ProjectType;
use App\Modules\Room\Models\Room;
use App\Modules\RoomIssue\Models\RoomIssue;
use App\Modules\ServiceType\Models\ServiceType;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Project\Models\Project;

class EditProjectFeature extends Feature
{

    private $model;
    /**
     * EditProjectFeature constructor.
     */
    public function __construct(Project $Project)
    {
        $this->model = $Project;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $customers = $this->getAllCustomers();
        $serviceTypes = $this->getAllServiceTypes();
        $professionals = $this->getAllProfessionals();
        $rooms = $this->getAllRooms();
        $roomFeatures = $this->getAllRoomFeatures();
        $roomIssues = $this->getAllRoomIssues();

        return $this->run(RespondWithView::class, [
            'view' => 'projects::edit',
            'data' => [
                'row' => $this->model ,
                'customers' => $customers,
                'serviceTypes' => $serviceTypes,
                'professionals' => $professionals,
                'rooms' => $rooms,
                'roomFeatures' => $roomFeatures,
                'roomIssues' => $roomIssues
            ]
        ]);
    }


    private function getAllCustomers(){
        return Customer::all();
    }

    private function getAllProfessionals(){
        return Professional::all();
    }

    private function getAllServiceTypes(){
        return ServiceType::all();
    }

    private function getAllRooms(){
        return Room::all();
    }

    private function getAllRoomIssues(){
        return RoomIssue::all();
    }

    private function getAllRoomFeatures(){
        return ProjectType::all();
    }
}
