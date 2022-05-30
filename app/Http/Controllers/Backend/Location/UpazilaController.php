<?php

namespace App\Http\Controllers\Backend\Location;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use App\Models\Upazila;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class UpazilaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_upazila = Upazila::all();
        // return $all_upazila;
        return view('backend.location.upazila.upazila_list', compact('all_upazila'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_division = Division::all();
        $all_district = District::all();
        return view('backend.location.upazila.upazila_create', compact('all_division', 'all_district'));
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
            'division_id' => 'required',
            'district_id' => 'required',
            'name'        => 'required'
        ], [
            'name.required' => 'please enter your division name'
        ]);

        Upazila::Create([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'name'        => $request->name,
            'slug' => make_slug($request->name),
        ]);
        return redirect()->route('upazila.index')->with('success', 'successfully data added');
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
        $upazila = Upazila::findOrFail($id);
        $districts = District::get();
        $all_division =Division::all();
        return view('backend.location.upazila.upazila_edit', compact('upazila','all_division','districts'));
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
        Upazila::where('id',$id)->update([
            'name'=> $request->name,

            'slug'=> make_slug($request->name),
        ]);
        return redirect()->route('upazila.index')->with('update', 'Successfully Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Upazila::findOrFail($id)->delete();
        return redirect()->route('upazila.index')->with('delete', 'Successfully Data delete');
    }
}
