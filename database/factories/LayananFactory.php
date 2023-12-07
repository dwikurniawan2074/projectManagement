<?php

namespace Database\Factories;

use App\Models\Layanan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LayananFactory extends Factory
{
    protected $model = Layanan::class;

    public function definition(): array
    {
        return [
            'layanan' => $this->faker->word(),
            'sub_layanan' => $this->faker->word(),
            'qty' => $this->faker->randomNumber(),
            'satuan' => $this->faker->word(),
            'price' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
