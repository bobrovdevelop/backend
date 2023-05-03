<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RecordFactory extends Factory
{
    public function definition(): array
    {
        return [
            'record' => fake()->name(),
        ];
    }
}
