<?php

namespace App\Models;

use App\Models\Vot\Vot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pull extends Model
{
    use HasFactory;
    protected $fillable = [

        'vot_id',
        'user_id',
        'yes',
        'no',
        'no_comment',
        'ip_address',

    ];
    public function vot()
    {
        return $this->hasOne(Vot::class, 'id', 'vot_id');
    }
}
