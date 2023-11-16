<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'email',
        'tel_fax',
        'attd',
        'cc',
        'date',
        'no_msg',
        'no_ref',
    ];
}
