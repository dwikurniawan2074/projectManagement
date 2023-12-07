<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Layanan extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'layanan',
        'sub_layanan',
        'qty',
        'satuan',
        'price',
        'id_penawaran',
        'id_trafo',
    ];

    public function penawaran(): BelongsTo
    {
        return $this->belongsTo(Penawaran::class, 'id_penawaran');
    }

    public function trafo(): BelongsTo
    {
        return $this->belongsTo(Trafo::class, 'id_trafo');
    }
}
