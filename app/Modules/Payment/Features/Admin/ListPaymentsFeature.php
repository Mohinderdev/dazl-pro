<?php

namespace App\Modules\Payment\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Payment\Models\Payment;

class ListPaymentsFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Payment();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->get();
        return $this->run(RespondWithView::class, [
            'view' => 'payments::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
