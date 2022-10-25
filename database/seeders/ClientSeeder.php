<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $client->name="Daniel";
        $client->phone_number="6243157890";
        $client->email="danielsancar2001@gmail.com";
        $client->save();

        $client = new Client();
        $client->name="sadsad";
        $client->phone_number="6243157890";
        $client->email="danielar2001@gmail.com";
        $client->save();
    }
}
