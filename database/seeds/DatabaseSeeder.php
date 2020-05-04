<?php

use Illuminate\Database\Seeder;

//This has been added to make the seeding possible
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PundiitarticlesTableSeeder::class);
//        $this->call(UsersTableSeeder::class);
    }
}
