<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Address;
use App\Models\Credit;
use App\Models\Debit;
use App\Models\Donator;
use App\Models\History;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $users = [
            [
                'name' => $faker->name,
                'email' => 'usuario1@example.com',
                'cpf' => '111.111.111-11',
                'phone' => '(11) 1111-1111',
                'date_of_birth' => '1990-01-01',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ],
        ];

        foreach ($users as $user) {
            $createdUser = User::create($user);

            $address = [
                'user_id' => $createdUser->id,
                'zipcode' => '12345-678',
                'street' => 'Rua Exemplo',
                'number' => '123',
                'complement' => 'Apto 1',
                'district' => 'Centro',
                'city' => 'Cidade Exemplo',
                'state' => 'UF',
            ];

            Address::create($address);

            $credit = [
                'card_flag' => 'Visa',
                'first_numbers_card' => rand(100000, 999999),
                'last_numbers_card' => rand(1000, 9999),
            ];

            Credit::create($credit);

            $debit = [
                'user_id' => $createdUser->id,
                'bank' => 'Banco Exemplo',
                'agency' => '1234',
                'account' => '56789',
                'digit' => '0',
            ];

            Debit::create($debit);

            $donator = [
                'name' => $faker->name,
                'user_id' => $createdUser->id,
                'donation_range' => 'Anual',
                'payment_method' => 'Crédito',
                'value' => rand(0, 1999),
            ];

            Donator::create($donator);

            $history = [
                'name' => 'Histórico Exemplo',
                'user_id' => $createdUser->id,
                'description' => 'Descrição do histórico',
                'value' => '354',
            ];

            History::create($history);
        }
    }
}
