<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Membuat 5 akun petugas dummy
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('petugas123'),
            ]);
        }

        // Membuat akun Admin BPBD
        User::updateOrCreate(
            ['email' => 'admin@bpbd.go.id'],
            [
                'name' => 'Admin BPBD',
                'password' => Hash::make('admin12345'),
            ]
        );
    }
}
