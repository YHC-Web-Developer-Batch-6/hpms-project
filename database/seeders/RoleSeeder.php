<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'admin',
            'user',
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $permissions = [
            'property-list',
            'property-create',
            'property-edit',
            'property-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $role = Role::whereName('admin')->first();
        $role->syncPermissions($permissions);

        $role = Role::whereName('user')->first();
        $role->syncPermissions(['property-list']);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        // assign role
        $admin->assignRole('admin');
    }
}
