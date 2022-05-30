<?php

namespace App\Http\Controllers\Backend\Blog\Post;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.blogs.categories.category_list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return $category;
        $categories = Category::all();
        return view('backend.blogs.categories.category_create',compact('categories'));
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

        Category::create([
            'name'        => $request->name,
            'slug'        => make_slug($request->name),
            'description' => $request->description,
            'author_id'   =>  Auth::guard('admin')->user()->id,

        ]);
        return redirect()->route('category.index')->with('success', 'Successfully Data delete');
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
        $category = Category::where('id', $id)->get()->first();
        return view('backend.blogs.categories.category_edit', compact('category'));
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
       Category :: findOrFail($id)->update([
        'name'        => $request->name,
        'slug'        => make_slug($request->name),
        'description' => $request->description,
        'update_author_id' => Auth::guard('admin')->user()->id,
       ]);

    //    return "ok";
       return redirect()->route('category.index')->with('update', 'Successfully Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->back()->with('delete', 'Successfully Data delete');
    }
}
