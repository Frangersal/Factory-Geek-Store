<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'Admin@user.com',
            'password' => Hash::make('adminadmin'),

             
        ]);        
    }
}
