<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog\News;
use App\Models\Division;
use App\Models\Upazila;
use Illuminate\Http\Request;

class LpostController extends Controller
{
    public function locationWisenews(Request $request)
    {

        $divisionid = $request->division_id;
        $districtid = $request->district_id;
        $upzilaid = $request->upazila_id;
        $upzilla = Upazila::with('getDistrict', 'getDivision')->where('id', $upzilaid)->first();
        // return $upzilla;

        $allnews = News::where('division_id', $divisionid)
            ->when($districtid, function ($query, $districtid) {
                return $query->where('district_id', $districtid);
            })->when($upzilaid, function ($query, $upzilaid) {
                return $query->where('upazila_id', $upzilaid);
            })
            ->latest()->paginate(5);
        // return $allnews;

        $latestnews   = News::get();
        $division = Division::all();
        $news = News::get();
        return view('frontend.locationnews', compact('allnews', 'latestnews', 'division', 'upzilla','news'));
    }
}
