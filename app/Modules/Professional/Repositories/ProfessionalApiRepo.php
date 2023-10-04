<?php

namespace App\Modules\Professional\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\Professional\Models\Professional;

class ProfessionalApiRepo extends BaseRepository
{
    public Professional $professional;
    public function __construct(Professional $professional)
    {
        parent::__construct($professional);
        $this->professional = $professional;
    }

    public function getProsByServiceIds(array $serviceIds){
        return $this->professional->whereHas('serviceTypes' , function($q) use ($serviceIds){
            $q->whereIn('service_type_id' ,$serviceIds);
        })->get();
    }

    public function getProWithCompany(?int $professionalId){
        return $this->professional
            ->with('company','company.images')
            ->find($professionalId);
    }

}
