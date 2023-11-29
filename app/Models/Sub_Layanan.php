<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Layanan extends Model
{
    use HasFactory;
    protected $table = 'sub_layanan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_layanan',
        'name',
    ];

    public function jenis_layanan()
    {
        return $this->belongsTo(Jenis_Layanan::class, 'id_penawaran');
    }
}
