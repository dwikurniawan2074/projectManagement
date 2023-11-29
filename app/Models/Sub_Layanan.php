<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Sub_Layanan extends Model
{
    use HasFactory,HasUlids;
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
