<?php

use AngularLaravel\Entities\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        factory('AngularLaravel\Entities\User', 10)->create();
    }
}
