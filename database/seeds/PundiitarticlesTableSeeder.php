<?php

use Illuminate\Database\Seeder;

//Additional
use Illuminate\Support\Facades\DB;
use App\Pundiitarticle;

class PundiitarticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Run database seeder for populating the PundiitArticles table
//        factory(App\Pundiitarticle::class, 30)->create();
    	for($i=1;$i<100;$i++)
    	{
	    	DB::table('pundiitarticles')->insert([
                'identity' => str_random(20),
                'name' => str_random(30),
                'author' => str_random(20),
	            'title' => str_random(40),
                'body' => str_random(100),
                'url' => str_random(100),
                'imageUrl' => str_random(100),
                'publicationDate' => now(),
	            'created_at' => now(),
	            'updated_at' => now(),
	        ]);
    	}
    }
}
