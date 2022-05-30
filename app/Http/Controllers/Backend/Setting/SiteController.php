<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting\SiteSetting;

class SiteController extends Controller
{
    public function index()
    {
        $site = SiteSetting::first();
        // return  $site ;
        return view('backend.setting.setting', compact('site'));
    }

    public function create()
    {
        $site = SiteSetting::first();
        // return  $site ;
        return view('backend.setting.setting', compact('site'));
    }

    public function store(Request $request)
    {
        // return $request->all();


        if ($request->hasFile('logo')) {

            $name = $request->logo->getClientOriginalName();
            $request->logo->storeAs('logo', $name, 'public');

            SiteSetting::updateOrInsert([
                'id'        => 1
            ], [
                'site_title'          => $request->site_title,
                'email'               => $request->email,
                'telephone_no'        => $request->telephone_no,
                'working_time'        => $request->working_time,
                'working_day'         => $request->working_day,
                'address'             => $request->address,
                'mobile_no'           => $request->mobile_no,
                'facebook_page_link'  => $request->facebook_page_link,
                'facebook_group_link' => $request->facebook_group_link,
                'facebook_link'       => $request->facebook_link,
                'twitter_link'        => $request->twitter_link,
                'instagram_link'      => $request->instagram_link,
                'linkedin_link'       => $request->linkedin_link,
                'youtube_link'        => $request->youtube_link,
                'intro_video_link'    => $request->intro_video_link,
                'logo' => $name,

            ]);

            return redirect()->back();
        } else {
            SiteSetting::updateOrInsert([
                'id'        => 1
            ], [
                'site_title'          => $request->site_title,
                'email'               => $request->email,
                'telephone_no'        => $request->telephone_no,
                'working_time'        => $request->working_time,
                'working_day'         => $request->working_day,
                'address'             => $request->address,
                'mobile_no'           => $request->mobile_no,
                'facebook_page_link'  => $request->facebook_page_link,
                'facebook_group_link' => $request->facebook_group_link,
                'facebook_link'       => $request->facebook_link,
                'twitter_link'        => $request->twitter_link,
                'instagram_link'      => $request->instagram_link,
                'linkedin_link'       => $request->linkedin_link,
                'youtube_link'        => $request->youtube_link,
                'intro_video_link'    => $request->intro_video_link,


            ]);
            return redirect()->back();
        }
    }
}
