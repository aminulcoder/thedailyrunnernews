<?php

namespace App\Http\Controllers\Backend\Blog\Post;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\SubCategory;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $subcategories = SubCategory::with('category')->latest()->get();
        // return $subcategories;
        return view('backend.blogs.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategory = SubCategory::all();
        $categories  = Category::all();
        // return $subcategory;
        return view('backend.blogs.subcategory.create', compact('categories', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'        => 'required',
            'description' => 'required',
        ], [
            'name.required'        => 'please enter your category name',
            'description.required' => 'please enter your description',
        ]);

        SubCategory::create([
            'name'        => $request->name,
            'slug'        => make_slug($request->name),
            'description' => $request->description,
            'category_id' => $request->category_id,
            'author_id'   => Auth::guard('admin')->user()->id,

        ]);
        return redirect()->route('subcategory.index')->with('success', 'Successfully Data delete');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories  = Category::all();
        $subcategory = SubCategory::where('id', $id)->get()->first();
        return view('backend.blogs.subcategory.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        SubCategory::findOrFail($id)->update([
            
            'name'             => $request->name,
            'slug'             => make_slug($request->name),
            'description'      => $request->description,
            'category_id'      => $request->category_id,
            'update_author_id' => Auth::guard('admin')->user()->id,
        ]);

        //    return "ok";
        return redirect()->route('subcategory.index')->with('update', 'Successfully Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCategory::findOrFail($id)->delete();
        return redirect()->back()->with('delete', 'Successfully Data delete');
    }
}
