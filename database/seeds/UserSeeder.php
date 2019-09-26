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
        $user = User::create(
            [
                'username' => 'Administrator',
            	'email' => 'robwert1997@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10)
            ]
        );


        $user = User::create(
            [
                'username' => 'John',
                'email' => 'john@example.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10)
            ]
        );
        
        factory(User::class)->times(10)->create();
    }
}
