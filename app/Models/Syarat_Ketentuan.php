<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syarat_Ketentuan extends Model
{
    use HasFactory;
    protected $table = 'syarat_ketentuan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];
}
