<?php

namespace App\Modules\HomeDiagnosticReport\Features\Admin;

use App\Core\Feature;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\HomeDiagnosticReport\Models\HomeDiagnosticReport;
use App\Modules\HomeDiagnosticReport\Requests\Admin\CreateHomeDiagnosticReportRequest;

class StoreHomeDiagnosticReportFeature extends Feature
{

    private $model;
    /**
     * StoreHomeDiagnosticReportFeature constructor.
     */
    public function __construct()
    {
        $this->model = new HomeDiagnosticReport;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateHomeDiagnosticReportRequest $request,ImagesFactoryInterface $imagesFactory)
    {
        $homeDigReport = $this->model->create($request->all());
        if($request->file('file')){
            $images = $imagesFactory->uploadImages($request->file('file'));
            $homeDigReport->images()->createMany($images);
        }
        return $this->run(RespondWithRoute::class, [
            'route' => 'home-diagnostic-reports.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
