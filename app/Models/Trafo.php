<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Trafo extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'trafo';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_penawaran',
        'merk',
        'capacity',
        'no_seri',
        'tahun',
    ];


    public function penawaran()
    {
        return $this->belongsTo(Penawaran::class, 'id_penawaran');
    }
}
