<?php

namespace App\Modules\Realtor\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\Realtor\Models\Realtor;

class RealtorApiRepo extends BaseRepository
{
    public function __construct(Realtor $realtor)
    {
        parent::__construct($realtor);
    }

}
