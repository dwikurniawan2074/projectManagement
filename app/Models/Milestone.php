<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Milestone extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'id',
        'submitted_date',
        'description',
        'due_date',
        'progress',
        'bobot'
    ];

    public function sub_milestone(): HasMany
    {
        return $this->hasMany(SubMilestone::class);
    }
}
