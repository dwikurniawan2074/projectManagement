<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Penawaran extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'penawaran';
    protected $primaryKey = 'id';
    protected $fillable = [
        'project_name',
        'judul_pekerjaan',
        'email',
        'tel_fax',
        'attd',
        'cc',
        'date',
        'no_msg',
        'no_ref',
        'segementasi_pasar',
        'syarat_pembayaran',
        'jangka_waktu',
        'pelaksanaan_pekerjaan',
        'negara',
        'provinsi',
        'kota',
        'alamat',
    ];
}
