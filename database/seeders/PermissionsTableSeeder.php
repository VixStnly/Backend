<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //permission for roles
        Permission::create(['name' => 'roles.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'roles.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'roles.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'roles.delete', 'guard_name' => 'api']);

        //permission for permissions
        
        Permission::create(['name' => 'permissions.index', 'guard_name' => 'api']);

        //permission for users
        Permission::create(['name' => 'users.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'users.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'users.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'users.delete', 'guard_name' => 'api']);

        //permission for data teacher
        Permission::create(['name' => 'datateachers.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'datateachers.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'datateachers.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'datateachers.delete', 'guard_name' => 'api']);

        //permission for data student
        Permission::create(['name' => 'datastudents.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'datastudents.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'datastudents.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'datastudents.delete', 'guard_name' => 'api']);

    }
}
