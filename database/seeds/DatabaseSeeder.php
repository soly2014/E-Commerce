<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 // you should call the seeder class UserTableSeeder you have created 
         $this->call(UserTableSeeder::class);
    }
}
