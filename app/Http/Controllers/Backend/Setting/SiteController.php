<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting\SiteSetting;

class SiteController extends Controller
{
    public function index()
    {
        $sitetitle      = option('title');
        $siteEmail      = option('email');
        $siteTelephone  = option('telephone_no');
        $facebook       = option('facebook');
        $facebook_page  = option('facebook_page');
        $facebook_group = option('facebook_group');
        $twitter        = option('twitter');
        $instagram      = option('instagram');
        $linkedin       = option('linkedin');
        $youtube        = option('youtube');
        $intro          = option('intro');
        $mobile         = option('mobile');
        $address        = option('address');
        $working_day    = option('working_day');
        $working_time   = option('working_time');
        $logo           = option('logo');
     
        return view('backend.setting.setting', compact('sitetitle', 'siteEmail', 'siteTelephone', 'facebook', 'facebook_page', 'facebook_group', 'twitter', 'instagram', 'linkedin', 'youtube', 'intro', 'mobile', 'address', 'working_day', 'working_time', 'logo'));
    }
    public function create()
    {
        $site = SiteSetting::first();
        return view('backend.setting.setting', compact('site'));
    }
    public function storetitle(Request $request)
    {
        option(['title' => $request->site_title]);
        return redirect()->back();
    }
    public function siteEmailstore(Request $request)
    {
        option(['email' => $request->email]);
        return redirect()->back();
    }
    public function siteTelephonenoStore(Request $request)
    {
        option(['telephone_no' => $request->telephone_no]);
        return redirect()->back();
    }
    public function facebooklinkStore(Request $request)
    {
        option(['facebook' => $request->facebook_link]);
        return redirect()->back();
    }
    public function facebookpagelinkStore(Request $request)
    {
        option(['facebook_page' => $request->facebook_page_link]);
        return redirect()->back();
    }
    public function facebookgrouplinkStore(Request $request)
    {
        option(['facebook_group' => $request->facebook_group_link]);
        return redirect()->back();
    }
    public function twitterlinkStore(Request $request)
    {
        option(['twitter' => $request->twitter_link]);
        return redirect()->back();
    }
    public function instagramlinkStore(Request $request)
    {
        option(['instagram' => $request->instagram_link]);
        return redirect()->back();
    }
    public function linkedinlinkStore(Request $request)
    {
        option(['linkedin' => $request->linkedin_link]);
        return redirect()->back();
    }
    public function youtubelinkStore(Request $request)
    {
        option(['youtube' => $request->youtube_link]);
        return redirect()->back();
    }
    public function introvideolinkStore(Request $request)
    {
        option(['intro' => $request->intro_video_link]);
        return redirect()->back();
    }
    public function mobileNoStore(Request $request)
    {
        option(['mobile' => $request->mobile_no]);
        return redirect()->back();
    }
    public function addressStore(Request $request)
    {
        option(['address' => $request->address]);
        return redirect()->back();
    }
    public function workingdayStore(Request $request)
    {
        option(['working_day' => $request->working_day]);
        return redirect()->back();
    }
    public function workingtimeStore(Request $request)
    {
        option(['working_time' => $request->working_time]);
        return redirect()->back();
    }
    public function logoStore(Request $request)
    {
        $name = $request->logo->getClientOriginalName();
        $request->logo->storeAs('images', $name, 'public');
        option(['logo' => $name]);
        return redirect()->back();
    }
}
