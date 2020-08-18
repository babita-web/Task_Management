<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Actor;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('role', 'admin')->first();
        $actorRole = Role::where('role', 'actor')->first();
        $userRole = Role::where('role', 'user')->first();

        $admin = User::create([
            'firstname' => 'Admin',
            'lastname'=> 'Admin',
            'role'=>'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        $actor = User::create([
            'firstname' => 'Actor',
            'lastname'=> 'Actor',
            'role'=>'actor',
            'email' => 'actor@gmail.com',
            'password' => bcrypt('actor')
        ]);

        $actor = User::create([
            'firstname' => 'Actor1',
            'lastname'=> 'Actor1',
            'role'=>'actor',
            'email' => 'actor1@gmail.com',
            'password' => bcrypt('actor1')
        ]);
        $user = User::create([
            'firstname' => 'User',
            'lastname'=> 'User',
            'role'=>'user',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('user1')
        ]);
        $actor = User::create([
            'firstname' => 'Actor2',
            'lastname'=> 'Actor2',
            'role'=>'actor',
            'email' => 'actor2@gmail.com',
            'password' => bcrypt('actor2')
        ]);
    $admin->roles()->attach($adminRole);
    $actor->roles()->attach($actorRole);
    $user->roles()->attach($userRole);
    }


}
