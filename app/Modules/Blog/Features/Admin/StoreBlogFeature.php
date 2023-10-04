<?php

namespace App\Modules\Blog\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithRoute;
use App\Modules\Blog\Models\Blog;
use App\Modules\Blog\Requests\Admin\CreateBlogRequest;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use Illuminate\Support\Str;

class StoreBlogFeature extends Feature
{

    private $model;
    /**
     * StoreBlogFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Blog;
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(CreateBlogRequest $request ,ImagesFactoryInterface $imagesFactory)
    {
        $images='';

        if($request->file('image')){
            $images = $imagesFactory->uploadImage($request->file('image'));


        }

        $request->merge([
            'slug' => Str::slug($request->title, '-'),
        ]);
        $data = $request->all();
        $data['image'] =$images;

       $this->model->create($data);



        return $this->run(RespondWithRoute::class, [
            'route' => 'blogs.index',
            'message_type' => 'success',
            'message' => 'Added Successfully',
        ]);
    }

}
