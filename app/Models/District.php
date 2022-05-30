<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class District extends Model
{
    use HasFactory ,Sluggable;
    protected $fillable = ['id', 'name', 'slug', 'division_id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

    public function getDivision()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }
}
