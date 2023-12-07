<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'layanan',
        'sub_layanan',
        'qty',
        'satuan',
        'price',
        'id_penawaran',
        'id_trafo',
    ];
}
