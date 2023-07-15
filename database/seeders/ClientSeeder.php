<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Caminos',
                'first_name' => 'Apple',
                'middle_name' => 'Andoy',
                'address' => 'Mandaug Calape, Bohol',
                'birth_date' => '2002-08-22',
                'phone_number' => '09172992278',
                'email' => 'applegwaps23@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Sili',
                'first_name' => 'Anak',
                'middle_name' => 'Halang2',
                'address' => ' Secret, Buang',
                'birth_date' => '2010-02-11',
                'phone_number' => '09982931821',
                'email' => 'applegwaps23@gmail.com',
                'initial_deposit' => 10000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
