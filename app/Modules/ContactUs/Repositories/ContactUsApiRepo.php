<?php

namespace App\Modules\ContactUs\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\ContactUs\Models\ContactUs;

class ContactUsApiRepo extends BaseRepository
{
    protected ContactUs $contactUs;

    public function __construct(ContactUs $contactUs)
    {
        $this->contactUs = $contactUs;
        parent::__construct($contactUs);
    }

    public function storeContactUs($data){
        return $this->create($data);
    }

}
