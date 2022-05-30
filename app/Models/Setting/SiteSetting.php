<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_title',
        'working_time',
        'working_day',
        'address',
        'email',
        'telephone_no',
        'mobile_no',
        'facebook_page_link',
        'facebook_group_link',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'linkedin_link',
        'youtube_link',
        'intro_video_link',
        'logo',
    ];
}
