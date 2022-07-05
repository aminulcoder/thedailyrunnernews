<?php

namespace App\Models\Blog;

use App\Models\District;
use App\Models\Division;
use App\Models\Upazila;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [

        'title',
        'content',
        'meta_title',
        'slug',
        'blog_meta_description',
        'video_url',
        'tags',
        'visibility',
        'status',
        'thumbnail',
        'category_id',
        'sub_category_id',
        'division_id',
        'district_id',
        'upazila_id',
        'user_id',
        'view_count',

    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function subcategory()
    {
        return $this->hasOne(SubCategory::class, 'id', 'sub_category_id');
    }
    public function getDistrict()
    {
        return $this->hasOne(District::class, 'id', 'district_id');
    }

    public function getDivision()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }

    public function getUpazila()
    {
        return $this->hasOne(Upazila::class, 'id', 'upazila_id');
    }

    public function tags()
    {
        return $this->hasOne(Tags::class, 'id', 'tags');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
