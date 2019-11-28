<?php

use Illuminate\Database\Seeder;

use App\User;
use App\UserInfo;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        UserInfo::truncate();
        
        factory(User::class, 100)->create()->each(function ($user) {

            factory(UserInfo::class)->create([
                'user_id' => $user->id,  
                ]);  	
        });
    }
}
