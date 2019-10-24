<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('admins')->insert([
            'first_name' => 'john',
            'last_name' => 'snow',
            'email' => 'john@gmail.com',
            'password' => Hash::make('john002'),
            'address' => 'kathmandu',
            'contact' => 9867456332,
            'gender' => 'male',
            'image' => 'john.jpg'
        ]);
    }
}
