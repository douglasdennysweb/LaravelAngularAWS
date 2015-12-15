<?php

use AngularLaravel\Entities\Project;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();

        factory('AngularLaravel\Entities\Project', 10)->create();
    }
}
