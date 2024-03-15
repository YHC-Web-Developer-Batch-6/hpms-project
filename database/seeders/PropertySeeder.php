<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $user_id = User::all()->random(1)->first()->pluck('id');

        for ($i = 0; $i < 10; $i++) {
            Property::create([
                'name' => fake()->company(),
                'price' => fake()->numberBetween(10000000, 100000000),
                'size' => fake()->numberBetween(1, 100),
                'facility' => fake()->paragraph(),
                'is_sold' => 0,
                'user_id' => fake()->randomElement(User::pluck('id')),
            ]);
        }
    }
}
