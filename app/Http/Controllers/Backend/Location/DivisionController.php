<?php

namespace App\Http\Controllers\Backend\Location;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
class DivisionController extends Controller
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
        $all_division =Division::all();
       return view('backend.location.division.division_list',compact('all_division'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('backend.location.division.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
        ],[
            'name.required' =>'please enter your division name'
        ]);

        Division::Create([
            'name' => $request->name,

            'slug'=> make_slug($request->name),
        ]);
        return redirect()->route('division.index')->with('success','successfully data added');
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
        $division = Division::findOrFail($id);

        return view('backend.location.division.edit_division', compact('division'));
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
        Division::where('id',$id)->update([
            'name'=> $request->name,
            'slug' => make_slug($request->name),
        ]);
        return redirect()->route('division.index')->with('update', 'Successfully Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Division::findOrFail($id)->delete();
        return redirect()->route('division.index')->with('delete', 'Successfully Data delete');
    }
}
