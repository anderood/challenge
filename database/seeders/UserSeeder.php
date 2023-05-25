<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@email.com',
            'cpf' => Str::random(10),
            'phone' => Str::random(10),
            'date_of_birth' => Str::random(10),
            'email_verified_at' => Str::random(10),
            'remember_token' => Str::random(10),
            'password' => bcrypt(Str::random(10)),
        ]);

        User::factory()
            ->count(10)
            ->create();
    }
}
