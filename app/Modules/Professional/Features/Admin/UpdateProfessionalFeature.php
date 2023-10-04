<?php

namespace App\Modules\Professional\Features\Admin;

use App\Core\Feature;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Professional\Models\Professional;
use App\Modules\Professional\Requests\Admin\UpdateProfessionalRequest;

class UpdateProfessionalFeature extends Feature
{

    private $model;
    /**
     * EditProfessionalFeature constructor.
     */
    public function __construct(Professional $Professional)
    {
        $this->model = $Professional;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateProfessionalRequest $request ,ImagesFactoryInterface $imagesFactory)
    {

      $this->model->update($request->all());


        $this->model->serviceTypes()->sync($request->service_type_ids);

        return $this->run(RespondWithRoute::class, [
            'route' => 'professionals.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
