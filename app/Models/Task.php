<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'text',
        'duration',
        'progress',
        'start_date',
        'parent',
    ];

    protected $casts = [
        'start_date' => 'datetime',
    ];
    protected $appends = ["open"];

    public function getOpenAttribute()
    {
        return true;
    }
}
