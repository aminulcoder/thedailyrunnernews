<?php

namespace App\Http\Controllers\Backend\Blog\Post;

use App\Http\Controllers\Controller;
use App\Models\Blog\SubCategory;
use Illuminate\Http\Request;

class CategoryajaxController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }
    public function CategorytoSubcategory (Request $request, $id)
    {
        // if($request->ajax()){
            $subcategory = SubCategory::where('category_id', $id)->orderBy('name', 'asc')->get();

            // return   $subcategory ;
            $data = view('backend.inc.ajaxcategory', compact('subcategory'))->render();
            return $data;
        // }
    }
}
