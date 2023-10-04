<?php

namespace App\Modules\AdditionalValue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\AdditionalValue\Models\AdditionalValue;
use Yajra\DataTables\DataTables;

class JsonAdditionalValuesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new AdditionalValue();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->get();

        return Datatables::of($rows)
            ->editColumn('created_at', function($row) {
                return $row->created_at->diffForHumans();
            })
            ->editColumn('actions', function($row) {
                return view('additional-values::actions', compact('row'));
            })
            ->rawColumns(['actions'])

            ->make(true);
    }
}
