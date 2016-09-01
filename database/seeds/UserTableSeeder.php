<?php

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

    	foreach (range(1,12) as $value) {
         
          \App\User::create([

                'name'     => 'ahmed'.$value,
                'username'     => 'username - '.$value,
	        	'email'    => $value.'@example.com',
	        	'password' => bcrypt(000000),
	        	'rule'     => 'admin',
	        	]);
    	}


    }

    
}
