<?php

namespace Database\Factories;

use App\Models\SubMilestone;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SubMilestoneFactory extends Factory
{
    protected $model = SubMilestone::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
