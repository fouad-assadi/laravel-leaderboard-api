<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		/*
		|  if you need to fake the data
		|  run =>  php artisan db:seed
		|
		*/    	
        $this->call(ApiUsersSeeder::class);
    }
}
