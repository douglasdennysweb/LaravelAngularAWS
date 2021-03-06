<?php

use AngularLaravel\Entities\Client;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::truncate();

        factory('AngularLaravel\Entities\Client', 10)->create();
    }
}
