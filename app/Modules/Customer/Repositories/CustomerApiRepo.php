<?php

namespace App\Modules\Customer\Repositories;


use App\Core\Repositories\BaseRepository;
use App\Modules\Customer\Models\Customer;

class CustomerApiRepo extends BaseRepository
{
    private Customer $customer;
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
        parent::__construct($customer);
    }

    public function findOrCreateCustomerByEmail(string $email ,array $data) {
        return $this->customer->firstOrCreate(['email' => $email] , $data);
    }

}
