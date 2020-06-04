<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'admin',
        	'username' => 'admin',
        	'email' => 'admin',
        	'password' => Hash::make('admin'),
        	'is_admin' => 1,
        ]);
    }
}
