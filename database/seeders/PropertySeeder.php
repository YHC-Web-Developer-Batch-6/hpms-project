<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $property = Property::create([
                'name' => fake()->company(),
                'price' => fake()->numberBetween(10000000, 100000000),
                'address' => fake()->address(),
                'size' => fake()->numberBetween(1, 100),
                'facility' => fake()->paragraph(),
                'is_sold' => 0,
                'user_id' => fake()->randomElement(User::pluck('id')),
            ]);

            $amount = fake()->numberBetween(2, 3);
            for ($j = 0; $j < $amount; $j++) {
                $imageUrl = 'https://picsum.photos/800/600';
                $newFileName = Str::random(8) . '.png';
                $property->addMediaFromUrl($imageUrl)->usingFileName($newFileName)->toMediaCollection('property');
            }
        }
    }
}
