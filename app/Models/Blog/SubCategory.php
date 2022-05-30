<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class SubCategory extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'description',
        'author_id',
        'category_id',
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

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }


}
