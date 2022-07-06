<?php

namespace App\Http\Controllers\Backend\Location;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Upazila;
use Illuminate\Http\Request;

class LoactionAjaxController extends Controller
{

    function __construct()
    {
        $this->middleware('admin');
    }
    public function districtFromDivision(Request $request, $id)
    {
        // if($request->ajax()){
            $districts = District::where('division_id', $id)->orderBy('name', 'asc')->get();
            $data = view('backend.inc.ajaxdistrictlist', compact('districts'))->render();
            return $data;
        // }
    }


    public function upazilaFromDistrict(Request $request, $id)
    {
      // if($request->ajax()){
        $upzillas = Upazila::where('district_id', $id)->orderBy('name', 'asc')->get();
        // return $upzillas;
        $data = view('backend.inc.ajaxupzillalist', compact('upzillas'))->render();
        return $data;
    // }
    }


    public function districtDivision(Request $request, $id)
    {
        // if($request->ajax()){
            $districts = District::where('division_id', $id)->orderBy('name', 'asc')->get();
            $data = view('backend.inc.ajaxdistrict', compact('districts'))->render();
            return $data;
        // }
    }


    //  sidebar Location Dependency
    public function Divisiontodistrict (Request $request, $id)
    {
        // if($request->ajax()){
            $districts = District::where('division_id', $id)->orderBy('name', 'asc')->get();
            $data = view('backend.inc.ajaxsidebardistrictlist', compact('districts'))->render();
            return $data;
        // }
    }

    public function upazilatoDistrict(Request $request, $id)
    {
      // if($request->ajax()){
        $upzillas = Upazila::where('district_id', $id)->orderBy('name', 'asc')->get();
        // return $upzillas;
        $data = view('backend.inc.ajaxupzillasidebarlist', compact('upzillas'))->render();
        return $data;
    // }
    }

 }
