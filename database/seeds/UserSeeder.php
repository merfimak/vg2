<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create(
			[
            	'name'=>'admin',
            	'email'=>'pornhub@gmail.com',
            	'password'=>bcrypt('zcwEN0oufLqpMJMw9utzL036/Xedlc1gz9zH/LNS8Co=')
            ]
         	);
    }
}
