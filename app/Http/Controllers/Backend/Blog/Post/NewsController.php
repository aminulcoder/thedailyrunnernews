<?php

namespace App\Http\Controllers\Backend\Blog\Post;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Blog\News;
use App\Models\Blog\SubCategory;
use App\Models\Blog\Tags;
use App\Models\District;
use App\Models\Division;
use App\Models\Upazila;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('category')->latest()->paginate(25);
        // return $news;
        return view('backend.blogs.news.news_list', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();

        $divissions = Division::all();
        // return $divission;
        $districts = District::all();
        // return $district;
        $upzillas = Upazila::all();

        $subcategories = SubCategory::all();

        // return   $subcategoey;

        $tags = Tags::all();
        // return $upzilla;
        $news = News::latest()->get();
        // return  $tags;
        return view('backend.blogs.news.create_news', compact('news', 'divissions', 'districts', 'upzillas', 'categories', 'subcategories', 'tags'));
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
            'title'                 => 'required',
            'content'               => 'required',
            'category_id'           => 'required',
            'thumbnail'             => 'required',
        ], [
            ' title.required'                => 'please enter your title',
            'content.required'               => 'please enter your content',
            ' thumbnail.required'            => 'please enter your thumbnail',
            ' category_id.required'          => 'please enter your category_id',
        ]);


        if ($request->hasFile('thumbnail')) {
            $name = $request->thumbnail->getClientOriginalName();
            $request->thumbnail->storeAs('images', $name, 'public');
            News::create([
                'title'                 => $request->title,
                'content'               => $request->content,
                'meta_title'            => $request->meta_title,
                'slug'                  => make_slug($request->title),
                'blog_meta_description' => $request->blog_meta_description,
                'video_url'             => $request->video_url,
                'tags'                  => json_encode($request->tags),
                'thumbnail'             => $name,
                'category_id'           => $request->category_id,
                'sub_category_id'       => $request->sub_category_id,
                'division_id'           => $request->division_id,
                'district_id'           => $request->district_id,
                'upazila_id'            => $request->upazila_id,
            ]);
            return redirect()->route('news.index')->with('success', 'successfully data added');
        } else {
            News::create([
                'title'                 => $request->title,
                'content'               => $request->content,
                'meta_title'            => $request->meta_title,
                'slug'                  => make_slug($request->title),
                'blog_meta_description' => $request->blog_meta_description,
                'video_url'             => $request->video_url,
                'tags'                  => json_encode($request->tags),
                'category_id'           => $request->category_id,
                'sub_category_id'       => $request->sub_category_id,
                'division_id'           => $request->division_id,
                'district_id'           => $request->district_id,
                'upazila_id'            => $request->upazila_id,
            ]);
            return redirect()->route('brand.index')->with('success', 'successfully data added');
        }
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
        $categories = Category::all();
        $subcategories = SubCategory::all();

        $divissions = Division::all();
        // return $divission;
        $districts = District::all();
        // return $district;
        $upazilas = Upazila::all();
        $news = News::firstWhere('id', $id);
        $tags = Tags::all();
        // return $news;

        return view('backend.blogs.news.news_edit', compact('news', 'categories', 'divissions', 'districts', 'upazilas', 'tags', 'subcategories'));
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
        // return $request->all();
        if ($request->hasFile('thumbnail')) {
            $name = $request->thumbnail->getClientOriginalName();
            $request->thumbnail->storeAs('images', $name, 'public');

            News::where('id',$id)->update([
                'title'                 => $request->title,
                'content'               => $request->content,
                'meta_title'            => $request->meta_title,
                'slug'                  => make_slug($request->title),
                'blog_meta_description' => $request->blog_meta_description,
                'video_url'             => $request->video_url,
                'tags'                  => json_encode($request->tags),
                'status'                => $request->status,
                'thumbnail'             => $name,
                'category_id'           => $request->category_id,
                'sub_category_id'       => $request->sub_category_id,
                'division_id'           => $request->division_id,
                'district_id'           => $request->district_id,
                'upazila_id'            => $request->upazila_id,
            ]);
            return redirect()->route('news.index')->with('success', 'successfully News updated');
        } else {
            News::where('id',$id)->update([

                'title'                 => $request->title,
                'content'               => $request->content,
                'meta_title'            => $request->meta_title,
                'slug'                  => make_slug($request->title),
                'blog_meta_description' => $request->blog_meta_description,
                'video_url'             => $request->video_url,
                'tags'                  => json_encode($request->tags),
                'status'                => $request->status,
                'category_id'           => $request->category_id,
                'sub_category_id'       => $request->sub_category_id,
                'division_id'           => $request->division_id,
                'district_id'           => $request->district_id,
                'upazila_id'            => $request->upazila_id,

            ]);
            return redirect()->route('news.index')->with('success', 'successfully data updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        Storage::disk('public')->delete('images/' . $news->image);
        $news->delete();
        return redirect(route('news.index'));
    }

    public function statusUpdate($id){

        $news = DB::table('news')
        ->select('status')
        ->where('id','=' ,$id)
        ->first();

        if($news->status == 1){
            $status = '0';

        }else{
            $status = '1';
        }

        $values = array('status' => $status);
        DB::table('news')->where('id',$id)->update($values);
        return redirect()->route('news.index')->with('success', 'successfully data updated');
    }
}
