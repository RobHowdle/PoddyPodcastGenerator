<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Permissions
        Permission::create(['name' => 'create episode']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'create hosts']);
        Permission::create(['name' => 'create categories']);

        Permission::create(['name' => 'manage episodes']);
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage hosts']);
        Permission::create(['name' => 'manage categories']);

        Permission::create(['name' => 'edit episodes']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'edit hosts']);
        Permission::create(['name' => 'edit categories']);

        Permission::create(['name' => 'delete episode']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'delete hosts']);
        Permission::create(['name' => 'delete categories']);

        // Creates roles and assign existing permissions
        $role1 = Role::create(['name' => 'host']);
        $role1->givePermissionTo('create episode');
        $role1->givePermissionTo('delete episode');
        $role1->givePermissionTo('edit episodes');
        $role1->givePermissionTo('edit categories');
        $role1->givePermissionTo('edit users');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('create episode');
        $role2->givePermissionTo('create users');
        $role2->givePermissionTo('create hosts');
        $role2->givePermissionTo('create categories');
        $role2->givePermissionTo('manage users');
        $role2->givePermissionTo('manage hosts');
        $role2->givePermissionTo('manage categories');
        $role2->givePermissionTo('manage episodes');
        $role2->givePermissionTo('edit episodes');
        $role2->givePermissionTo('edit users');
        $role2->givePermissionTo('edit hosts');
        $role2->givePermissionTo('edit categories');
        $role2->givePermissionTo('delete episode');
        $role2->givePermissionTo('delete users');
        $role2->givePermissionTo('delete hosts');
        $role2->givePermissionTo('delete categories');
    }
}