<?php


namespace App\Modules\Company\Services;


use App\Modules\Company\Repositories\CompanyApiRepo;
use App\Modules\Professional\Repositories\ProfessionalApiRepo;
class CompanyService
{
    protected CompanyApiRepo $companyApiRepo;
    protected ProfessionalApiRepo $professionalApiRepo;

    public function __construct(
        CompanyApiRepo $companyApiRepo,
        ProfessionalApiRepo $professionalApiRepo

    ){
        $this->companyApiRepo = $companyApiRepo;
        $this->professionalApiRepo = $professionalApiRepo;
    }

    public function getCompanyFromPro(?int $professionalId){
        $professionalId = ($professionalId) ? : auth('professional')->id();
        return $this->professionalApiRepo->getProWithCompany($professionalId);
    }

    public function updateCompany(array $data){
        $professional = auth('professional');
        return ($professional->user()->company->update($data));
    }

}
