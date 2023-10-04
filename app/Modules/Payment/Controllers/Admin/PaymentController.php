<?php

namespace App\Modules\Payment\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Payment\Models\Payment;
use App\Modules\Payment\Features\Admin\EditPaymentFeature;
use App\Modules\Payment\Features\Admin\StorePaymentFeature;
use App\Modules\Payment\Features\Admin\CreatePaymentFeature;
use App\Modules\Payment\Features\Admin\DeletePaymentFeature;
use App\Modules\Payment\Features\Admin\JsonPaymentsFeature;
use App\Modules\Payment\Features\Admin\ListPaymentsFeature;
use App\Modules\Payment\Features\Admin\UpdatePaymentFeature;

class PaymentController extends Controller
{
    private $model;

    public function __construct(Payment $Payment)
    {
        $this->model = $Payment;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListPaymentsFeature::class);
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
        return $this->serve(JsonPaymentsFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreatePaymentFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StorePaymentFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $Payment
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Payment $Payment)
    {
        return $this->serve(EditPaymentFeature::class, [
            'Payment' => $Payment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Payment $Payment
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Payment $Payment)
    {
        return $this->serve(UpdatePaymentFeature::class, [
            'Payment' => $Payment,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Payment $Payment
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Payment $Payment)
    {
        return $this->serve(DeletePaymentFeature::class, [
            'Payment' => $Payment,
        ]);
    }
}
