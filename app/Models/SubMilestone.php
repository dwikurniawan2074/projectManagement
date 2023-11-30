<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubMilestone extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'milestone_id',
        'start_date',
        'due_date',
        'description',
        'file',
        'bobot',
    ];

    public function milestone(): BelongsTo
    {
        return $this->belongsTo(Milestone::class);
    }
}
