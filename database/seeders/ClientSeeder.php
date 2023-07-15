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
        // Client::factory(30)->create();

        $client = [

            [
                'last_name' => 'Caminos',
                'first_name' => 'Apple',
                'middle_name' => 'Andoy',
                'phone_number' => '09321370116',
                'address' => 'Mandaug Calape, Bohol.',
                'birth_date' => '2001-05-16',
                'email' => 'applegwaps23@gmail.com',
                'initial_deposit' => 30000,
            ],

            [
                'last_name' => 'Aparicio',
                'first_name' => 'Denice',
                'middle_name' => 'Bautista',
                'phone_number' => '0997868687',
                'address' => 'Inabanga Bohol',
                'birth_date' => '2002-10-14',
                'email' => 'denicejaneaparicio1402@gmail.com',
                'initial_deposit' => 18000,
            ],
            [
                'last_name' => 'Lauros',
                'first_name' => 'Mary',
                'middle_name' => 'XXX',
                'phone_number' => '09321370116',
                'address' => 'Pundol Loon, Bohol.',
                'birth_date' => '2000-10-25',
                'email' => 'kimsecret627@gmail.com',
                'initial_deposit' => 30000,
            ],
            
            [
                'last_name' => 'Golosinda',
                'first_name' => 'Aljohn',
                'middle_name' => 'Golo',
                'phone_number' => '0978588989',
                'address' => 'Pooc, Tubigon, Bohol.',
                'birth_date' => '1999-10-19',
                'email' => 'aldjohngolosinda@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Bahenting',
                'first_name' => 'Rhea',
                'middle_name' => '',
                'phone_number' => '0975767589',
                'address' => 'Kabulihan, Tubigon, Bohol.',
                'birth_date' => '2003-10-06',
                'email' => 'reajenbahenting829@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Mascarinas',
                'first_name' => 'Kristine',
                'middle_name' => 'Dupa',
                'phone_number' => '09638757189',
                'address' => 'Ilijan, Tubigon, Bohol.',
                'birth_date' => '2002-11-07',
                'email' => 'kristinedupa66@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Villarmia',
                'first_name' => 'Acejoy',
                'middle_name' => 'Mejares',
                'phone_number' => '09987876787',
                'address' => 'Batasan Island, Tubigon, Bohol.',
                'birth_date' => '1998-08-04',
                'email' => 'acejoygwapo123@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Dupa',
                'first_name' => 'Kristine',
                'middle_name' => '',
                'phone_number' => '0786757689',
                'address' => 'Ilijan Norte, Tubigon, Bohol.',
                'birth_date' => '2001-12-30',
                'email' => 'dupakristine96@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Mae',
                'first_name' => 'Aparicio',
                'middle_name' => 'Bautista',
                'phone_number' => '09787565783',
                'address' => 'Baogo Inabanga, Bohol.',
                'birth_date' => '2002-10-14',
                'email' => 'apariciodenice1402@gmail.com',
                'initial_deposit' => 20000,
            ],
            
        ];

        foreach($client as $c) {
            Client::create($c);
        }
    }
}