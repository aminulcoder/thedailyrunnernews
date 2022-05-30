<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Upazila extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['id', 'name', 'slug', 'district_id','division_id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }


    public function getDistrict()
    {
        return $this->hasOne(District::class, 'id', 'district_id');
    }

    public function getDivision()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }
}
