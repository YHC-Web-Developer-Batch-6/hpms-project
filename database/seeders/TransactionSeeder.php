<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 3; $i++) {
            Transaction::create([
                'user_id' => fake()->randomElement(User::pluck('id')),
                'property_id' => fake()->randomElement(Property::pluck('id')),
                'code' => fake()->regexify('[A-Z0-9]{6}'),
                'desc' => fake()->paragraph(),
                'total' => fake()->numberBetween(20000000, 100000000),
                'status' => 'paid',
                'type' => 'Pembayaran Penuh',
            ]);
        }
    }
}
