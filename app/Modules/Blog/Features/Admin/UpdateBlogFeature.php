<?php

namespace App\Modules\Blog\Features\Admin;

use App\Core\Feature;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Blog\Models\Blog;
use App\Modules\Blog\Requests\Admin\UpdateBlogRequest;
use Illuminate\Support\Str;

class UpdateBlogFeature extends Feature
{

    private $model;
    /**
     * EditBlogFeature constructor.
     */
    public function __construct(Blog $Blog)
    {
        $this->model = $Blog;
    }

    /**
     *
     * @param Request $request
     * @return use App\Core\Response\Api\RespondWithRoute;
     */
    public function handle(UpdateBlogRequest $request ,ImagesFactoryInterface $imagesFactory)
    {
        $images=$request->prev;

        if($request->file('image')){
            $images = $imagesFactory->uploadImage($request->file('image'));


        }

        $request->merge([
            'slug' => Str::slug($request->title, '-'),
        ]);
        $data = $request->all();
        $data['image'] =$images;

        $this->model->update($data);

        return $this->run(RespondWithRoute::class, [
            'route' => 'blogs.index',
            'message_type' => 'success',
            'message' => 'Updated Successfully',
        ]);
    }

}
