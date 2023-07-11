<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'description',
        'start_time',
        'venue',
        'status',
    ];

    protected $dates = ['start_time', 'deleted_at'];

    // Define any relationships or additional methods here
}
