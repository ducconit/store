<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Mung9thang12\Permission\Models\Permission;
use Mung9thang12\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name'=>'dashboard'
        ]);

        //1
        Role::create([
            'name'=>'admin'
        ])->givePermissionTo(1);

        //2
        Role::create([
            'name'=>'transistor'
        ])->givePermissionTo(1);

        //3
        Role::create([
            'name'=>'cashier'
        ])->givePermissionTo(1);


        //4
        Role::create([
            'name'=>'customer'
        ]);
    }
}
