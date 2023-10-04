<?php

namespace App\Modules\House\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\House\Models\House;

class HouseRepo extends BaseRepository
{
    protected House $house;
    public function __construct(House $house)
    {
        $this->house = $house;
        parent::__construct($house);
    }

    public function store(array $data){
        $this->create($data);
    }

}
