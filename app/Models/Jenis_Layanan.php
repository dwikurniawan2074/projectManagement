<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Jenis_Layanan extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'jenis_layanan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'email',
        'name',
    ];
}
