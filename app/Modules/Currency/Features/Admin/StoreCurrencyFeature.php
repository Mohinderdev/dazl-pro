<?php

namespace App\Modules\Currency\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Currency\Models\Currency;
use App\Modules\Currency\Requests\Admin\CreateCurrencyRequest;

class StoreCurrencyFeature extends Feature
{

    private $model;
    /**
     * StoreCurrencyFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Currency;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateCurrencyRequest $request)
    {
        $this->model->create($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'currencies.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
