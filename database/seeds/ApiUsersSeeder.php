<?php

use Illuminate\Database\Seeder;
use App\ApiUsers;

class ApiUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    /*
	    |	
	    |	Let's truncate first
	    |	and then enter the fake data using Factory
	    |
	    */    	
        // ApiUsers::truncate();
        // $faker = \Faker\Factory::create();

        // for ($i = 0; $i < 5; $i++) {
        //     ApiUsers::create([
        //         'name'    => $faker->name,
        //         'age' 	  => rand(1, 50),
        //         'points'  => 0,
        //         'address' => $faker->address,
        //     ]);
        // }

        ApiUsers::truncate();
        ApiUsers::create([
            'name'     => '_name',
            'age'      => 0,
            'points'   => 10,
            'address'  => '_address'
        ]);

        ApiUsers::create([
            'name'     => '_name',
            'age'      => 0,
            'points'   => 20,
            'address'  => '_address'
        ]);          


    }


}
