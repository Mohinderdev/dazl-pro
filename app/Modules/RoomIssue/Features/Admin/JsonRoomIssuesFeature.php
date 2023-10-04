<?php

namespace App\Modules\RoomIssue\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\RoomIssue\Models\RoomIssue;
use Yajra\DataTables\DataTables;

class JsonRoomIssuesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new RoomIssue();
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
                return view('room-issues::actions', compact('row'));
            })
            ->rawColumns(['actions'])

            ->make(true);
    }
}
