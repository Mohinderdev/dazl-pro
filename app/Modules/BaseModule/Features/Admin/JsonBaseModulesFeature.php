<?php

namespace App\Modules\BaseModule\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\BaseModule\Models\BaseModule;
use Yajra\DataTables\DataTables;

class JsonBaseModulesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new BaseModule();
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
                return view('base-modules::actions', compact('row'));
            })
            ->rawColumns(['actions'])

            ->make(true);
    }
}
