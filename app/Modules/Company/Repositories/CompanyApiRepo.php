<?php

namespace App\Modules\Company\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\Company\Models\Company;

class CompanyApiRepo extends BaseRepository
{
    protected Company $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
        parent::__construct($company);
    }

    public function storeCompany($data){
        return $this->create($data);
    }

}
