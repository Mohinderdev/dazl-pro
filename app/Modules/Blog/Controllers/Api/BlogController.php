<?php
namespace App\Modules\Blog\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Blog\Models\Blog;
use App\Modules\Blog\Features\Api\ListBlogsFeature;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $model;

    public function __construct(Blog $unitView)
    {
        $this->model = $unitView;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListBlogsFeature::class);
    }

    public function getblogDetail($slug)
    {
       return Blog::where('slug',$slug)->first();
    }

    public function blogstocategory($id)
    {
       return Blog::where('category_id',$id)->get();
    }

    public function publish(Request $request)
    {

       return Blog::where('publish',$request->publish)->get();
    }



}
