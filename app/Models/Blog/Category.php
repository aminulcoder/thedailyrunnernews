<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'author_id',
        'update_author_id'

    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function news()
    {
        return $this->hasMany(News::class, 'category_id', 'id') ->latest();
    }
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }
}
