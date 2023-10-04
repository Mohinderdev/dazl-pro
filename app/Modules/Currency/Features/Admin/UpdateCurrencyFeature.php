<?php

namespace App\Modules\Currency\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Currency\Models\Currency;
use App\Modules\Currency\Requests\Admin\UpdateCurrencyRequest;

class UpdateCurrencyFeature extends Feature
{

    private $model;
    /**
     * EditCurrencyFeature constructor.
     */
    public function __construct(Currency $currency)
    {
        $this->model = $currency;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateCurrencyRequest $request)
    {
        $this->model->update($request->all());

        return $this->run(RespondWithRoute::class, [
            'route' => 'currencies.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
