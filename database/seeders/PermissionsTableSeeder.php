<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //permission users
        Permission::create(['name'  => 'users.index', 'guard_name'  => 'web']);
        Permission::create(['name'  => 'users.create', 'guard_name' => 'web']);
        Permission::create(['name'  => 'users.edit', 'guard_name'   => 'web']);
        Permission::create(['name'  => 'users.delete', 'guard_name' => 'web']);

        //permission customers
        Permission::create(['name'  => 'customers.index', 'guard_name'  => 'web']);
        Permission::create(['name'  => 'customers.create', 'guard_name' => 'web']);
        Permission::create(['name'  => 'customers.edit', 'guard_name'   => 'web']);
        Permission::create(['name'  => 'customers.delete', 'guard_name' => 'web']);

        //permission divisions
        Permission::create(['name'  => 'divisions.index', 'guard_name'  => 'web']);
        Permission::create(['name'  => 'divisions.create', 'guard_name' => 'web']);
        Permission::create(['name'  => 'divisions.edit', 'guard_name'   => 'web']);
        Permission::create(['name'  => 'divisions.delete', 'guard_name' => 'web']);

        //permission levels
        Permission::create(['name'  => 'levels.index', 'guard_name'  => 'web']);
        Permission::create(['name'  => 'levels.create', 'guard_name' => 'web']);
        Permission::create(['name'  => 'levels.edit', 'guard_name'   => 'web']);
        Permission::create(['name'  => 'levels.delete', 'guard_name' => 'web']);

        //permission tickets
        Permission::create(['name'  => 'tickets.index', 'guard_name'  => 'web']);
        Permission::create(['name'  => 'tickets.create', 'guard_name' => 'web']);
        Permission::create(['name'  => 'tickets.edit', 'guard_name'   => 'web']);
        Permission::create(['name'  => 'tickets.delete', 'guard_name' => 'web']);

        //permission ticket_details
        Permission::create(['name'  => 'ticket_details.index', 'guard_name'  => 'web']);
        Permission::create(['name'  => 'ticket_details.create', 'guard_name' => 'web']);
        Permission::create(['name'  => 'ticket_details.edit', 'guard_name'   => 'web']);
        Permission::create(['name'  => 'ticket_details.delete', 'guard_name' => 'web']);

        //permission assigns
        Permission::create(['name'  => 'assigns.index', 'guard_name'  => 'web']);
        Permission::create(['name'  => 'assigns.create', 'guard_name' => 'web']);
        Permission::create(['name'  => 'assigns.edit', 'guard_name'   => 'web']);
        Permission::create(['name'  => 'assigns.delete', 'guard_name' => 'web']);

        //permission assign_details
        Permission::create(['name'  => 'assign_details.index', 'guard_name'  => 'web']);
        Permission::create(['name'  => 'assign_details.create', 'guard_name' => 'web']);
        Permission::create(['name'  => 'assign_details.edit', 'guard_name'   => 'web']);
        Permission::create(['name'  => 'assign_details.delete', 'guard_name' => 'web']);

    }
}
