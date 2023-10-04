<?php

namespace App\Modules\HomeDiagnosticReport\Features\Admin;

use App\Core\Feature;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\HomeDiagnosticReport\Models\HomeDiagnosticReport;
use App\Modules\HomeDiagnosticReport\Requests\Admin\UpdateHomeDiagnosticReportRequest;

class UpdateHomeDiagnosticReportFeature extends Feature
{

    private $model;
    /**
     * EditHomeDiagnosticReportFeature constructor.
     */
    public function __construct(HomeDiagnosticReport $HomeDiagnosticReport)
    {
        $this->model = $HomeDiagnosticReport;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateHomeDiagnosticReportRequest $request,ImagesFactoryInterface $imagesFactory)
    {
        $this->model->update($request->all());

        if($request->file('file')){
            $images = $imagesFactory->uploadImages($request->file('file'));
            $this->model->images()->createMany($images);
        }

        return $this->run(RespondWithRoute::class, [
            'route' => 'home-diagnostic-reports.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
