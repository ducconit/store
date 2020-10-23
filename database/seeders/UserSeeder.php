<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 Admin
        User::create([
            'name'=>'Admin',
            'email'=>'admin@store.test',
            'password'=>app('hash')->make('123'),
            'avatar'=>'https://ui-avatars.com/api/?name=AD'
        ])->assignRole(1);



        //2 Transistor
        User::create([
            'name'=>'Transistor',
            'email'=>'transistor@store.test',
            'password'=>app('hash')->make('123'),
            'avatar'=>'https://ui-avatars.com/api/?name=TR'
        ])->assignRole(2);


        //3 cashier
        User::create([
            'name'=>'Cashier',
            'email'=>'cashier@store.test',
            'password'=>app('hash')->make('123'),
            'avatar'=>'https://ui-avatars.com/api/?name=CS'
        ])->assignRole(3);


        //4 Customer
        Customer::create([
            'name'=>'Customer',
            'email'=>'customer@store.test',
            'password'=>app('hash')->make('123'),
            'avatar'=>'https://ui-avatars.com/api/?name=CT'
        ])->assignRole(4);


        //5 Customer2
        Customer::create([
            'name'=>'Customer2',
            'email'=>'customer2@store.test',
            'password'=>app('hash')->make('123'),
            'avatar'=>'https://ui-avatars.com/api/?name=C2'
        ])->assignRole(4);


        //6 Customer3
        Customer::create([
            'name'=>'Customer3',
            'email'=>'customer3@store.test',
            'password'=>app('hash')->make('123'),
            'avatar'=>'https://ui-avatars.com/api/?name=C3'
        ])->assignRole(4);
    }
}
