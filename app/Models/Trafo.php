<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trafo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'id_penawaran',
        'merk',
        'capacity',
        'no_seri',
    ];


    public function penawaran()
    {
        return $this->belongsTo(Penawaran::class, 'id_penawaran');
    }
}
