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
//         $this->call(UsersTableSeeder::class);
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

//        DB::table('service_types')->insert([
//            ['service_types' => 'Dry Cleaning'],
//            ['service_types' => 'Wash And Fold'],
//            ['service_types' => 'Laundered And Pressed']
//        ]);
//
        DB::table('orders_status')->insert([
            ['status' => 'New Order', 'identifier' => 1],
            ['status' => 'Picked Up', 'identifier' => 2],
            ['status' => 'Processing Started', 'identifier' => 3],
            ['status' => 'Ready For Delivery', 'identifier' => 4],
            ['status' => 'Delivered', 'identifier' => 5],
            ['status' => 'Cancelled', 'identifier' => 6]
        ]);


    }
}


