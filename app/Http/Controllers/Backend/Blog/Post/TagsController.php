<?php

namespace App\Http\Controllers\Backend\Blog\Post;

use App\Http\Controllers\Controller;
use App\Models\Blog\Tags;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tag;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags =Tags::all();

        return view('backend.blogs.tag.tag',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.blogs.tag.create_tag');
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
            'name'          => 'required',
        ], [
            'name.required' => 'please enter your category name',
        ]);

        Tags::create([
            'name'        => $request->name,
            'slug'        => make_slug($request->name),
            'author_id'   =>  Auth::guard('admin')->user()->id,
        ]);
        return redirect()->route('tags.index')->with('success', 'Successfully Data delete');
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
        $tags = Tags::where('id', $id)->get()->first();
        return view('backend.blogs.tag.edit_tag', compact('tags'));
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
        Tags::findOrFail($id)->update([
            'name'        => $request->name,
            'slug'        => make_slug($request->name),
            'update_author_id'   => Auth::guard('admin')->user()->id,
           ]);

        //    return "ok";
           return redirect()->route('tags.index')->with('update', 'Successfully Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tags::findOrFail($id)->delete();
        return redirect()->back()->with('delete', 'Successfully Data delete');
    }
}
