<?php

namespace App\Modules\Room\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Room\Models\Room;

class ListRoomsFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Room();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->with('features')->get();

        return $this->run(RespondWithView::class, [
            'view' => 'rooms::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
