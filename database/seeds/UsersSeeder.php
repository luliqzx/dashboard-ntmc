<?php

use Illuminate\Database\Seeder;

use App\Role as Role;  // <==
use App\Permission as Permission; // <==
use App\User as User; // <==

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Membuat role admin
    	$adminRole = new Role();
    	$adminRole->name = "admin";
    	$adminRole->display_name = "Admin";
    	$adminRole->save();
// Membuat role member
    	$memberRole = new Role();
    	$memberRole->name = "user";
    	$memberRole->display_name = "User";
    	$memberRole->save();
// Membuat sample admin
    	$admin = new User();
    	$admin->name = 'Administrator';
    	$admin->email = 'admin@gmail.com';
        $admin->username = 'admin';
        $admin->phone_number = '1';
    	$admin->password = bcrypt('rahasia');
    	$admin->save();
    	$admin->attachRole($adminRole);
// Membuat sample member
    	$member = new User();
    	$member->name = "User1";
        $member->username = 'user1';
    	$member->email = 'user1@gmail.com';
        $member->phone_number = '1';
    	$member->password = bcrypt('rahasia');
    	$member->save();
    	$member->attachRole($memberRole);
    }
}
