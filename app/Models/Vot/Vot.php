<?php

namespace App\Models\Vot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vot extends Model
{
    use HasFactory;
    protected $fillable =[

        'description',
        'yes',
        'no',
        'no_comment',
        'start_date',
        'end_date',
    ];

    protected $dates = ['start_date','end_date'];
}
