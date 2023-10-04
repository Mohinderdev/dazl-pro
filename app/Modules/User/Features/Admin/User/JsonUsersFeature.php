<?php

namespace App\Modules\User\Features\Admin\User;

use App\Core\Feature;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\User\Models\User;
use Exception;
use Yajra\DataTables\DataTables;

class JsonUsersFeature extends Feature
{
    private $model;
    /**
     * ListUsersFeature constructor.
     */
    public function __construct()
    {
        $this->model = new User();
    }

    /**
     *
     * @return RespondWithView
     * @throws Exception
     */
    public function handle()
    {
        $rows = $this->model->latest()->get();

        return Datatables::of($rows)
            ->editColumn('country_id', function($row) {
                return json_decode($row->country->name, true)[config('app.locale')];
            })
            ->editColumn('register_way', function($row) {
                return view('users::users.data.register_way', compact('row'));
            })
            ->editColumn('is_active', function($row) {
                return view('users::users.data.row_status', compact('row'));
            })
            ->editColumn('created_at', function($row) {
                return $row->created_at->diffForHumans();
            })
            ->editColumn('actions', function($row) {
                return view('users::users.actions', compact('row'));
            })
            ->rawColumns(['actions', 'is_active', 'register_way'])

            ->make(true);
    }
}
