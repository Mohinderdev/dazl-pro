<?php

namespace App\Modules\Customer\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Customer\Models\Customer;
use App\Modules\Customer\Features\Admin\EditCustomerFeature;
use App\Modules\Customer\Features\Admin\StoreCustomerFeature;
use App\Modules\Customer\Features\Admin\CreateCustomerFeature;
use App\Modules\Customer\Features\Admin\DeleteCustomerFeature;
use App\Modules\Customer\Features\Admin\JsonCustomersFeature;
use App\Modules\Customer\Features\Admin\ListCustomersFeature;
use App\Modules\Customer\Features\Admin\UpdateCustomerFeature;

class CustomerController extends Controller
{
    private $model;

    public function __construct(Customer $Customer)
    {
        $this->model = $Customer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListCustomersFeature::class);
    }

    /**
     * Get datatable json.
     *
     * @return Collection
     *
     * @throws \Exception
     */
    public function jsonData()
    {
        return $this->serve(JsonCustomersFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateCustomerFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreCustomerFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $Customer
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Customer $Customer)
    {
        return $this->serve(EditCustomerFeature::class, [
            'Customer' => $Customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Customer $Customer
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Customer $Customer)
    {
        return $this->serve(UpdateCustomerFeature::class, [
            'Customer' => $Customer,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Customer $Customer
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Customer $Customer)
    {
        return $this->serve(DeleteCustomerFeature::class, [
            'Customer' => $Customer,
        ]);
    }
}
