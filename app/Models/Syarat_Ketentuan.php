<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Syarat_Ketentuan extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'syarat_ketentuan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'deskripsi',
    ];
}
