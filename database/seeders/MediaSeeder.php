<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Property;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Images for Property
        $properties = Property::all();
        foreach ($properties as $property) {
            $amount = fake()->numberBetween(2, 3);
            for ($j = 0; $j < $amount; $j++) {
                $imageUrl = 'https://picsum.photos/800/600';
                $newFileName = Str::random(8) . '.png';
                $property->addMediaFromUrl($imageUrl)->usingFileName($newFileName)->toMediaCollection('property');
            }
        }

        // Images for User
        $users = User::all();
        foreach ($users as $user) {
            if ($user->id != 1) {
                $name = Str::slug($user->name);
                $imageUrl = "https://eu.ui-avatars.com/api/?name={$name}&format=png";
                $newFileName = Str::random(8) . '.png';
                $user->addMediaFromUrl($imageUrl)->usingFileName($newFileName)->toMediaCollection('avatar');
            }
        }
    }
}
