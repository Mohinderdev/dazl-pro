<?php

namespace App\Modules\Currency\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Currency\Models\Currency;

class DeleteCurrencyFeature extends Feature
{

    private $model;
    /**
     * DeleteCurrencyFeature constructor.
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
    public function handle()
    {
        $this->model->delete();

        return $this->run(RespondWithRoute::class, [
            'route' => 'currencies.index',
            'message_type' => 'success',
            'message' => 'Deleted Successfully',
        ]);
    }

}
