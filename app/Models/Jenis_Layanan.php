<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Layanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'email',
        'name',
    ];
}
