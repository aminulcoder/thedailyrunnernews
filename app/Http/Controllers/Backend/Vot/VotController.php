<?php

namespace App\Http\Controllers\Backend\Vot;

use App\Http\Controllers\Controller;
use App\Models\Vot\Vot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $vots = Vot::latest()->get();
        $vots = Vot::get();

        return view('backend.vot.index', compact('vots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vot.create');
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
            'description' => 'required',
            'start_date'  => 'required',
            'end_date'    => 'required',

        ], [
            'description.required' => 'Please enter your description ',
            'start_date.required'  => 'Please enter your start_date ',
            'end_date.required'    => 'Please enter your end_date',

        ]);
        Vot::create([

            'description' => $request->description,
            'start_date'  => $request->start_date,
            'end_date'    => $request->end_date,
            // 'author_id'              => Auth::user()->id
        ]);
        // return "ok";
        return redirect()->route('vot.index')->with('success', 'successfully data added');
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
        $vot = Vot::findOrFail($id);

        return view('backend.vot.edit', compact('vot'));
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


        if ($request->vot == 'yes') {
            Vot::where('id', $id)->increment('yes');
            Vot::where('id', $id)->increment('total_vot');
            return redirect()->back();
        }
        if ($request->vot == 'no') {
            Vot::where('id', $id)->increment('no');
            Vot::where('id', $id)->increment('total_vot');
            return redirect()->back();
        }
        if ($request->vot == 'no_comment') {
            Vot::where('id', $id)->increment('no_comment');
            Vot::where('id', $id)->increment('total_vot');
            return redirect()->back();
        }


        Vot::where('id', $id)->update([

            'description' => $request->description,
            'start_date'  => $request->start_date,
            'end_date'    => $request->end_date,

        ]);
        return redirect()->route('vot.index')->with('update', 'Successfully Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vot::findOrFail($id)->delete();
        return redirect()->route('vot.index')->with('delete', 'Successfully Data delete');
    }
}
