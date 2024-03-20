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

        // assign avatar
        $imageUrl = 'https://media.licdn.com/dms/image/C4E03AQGO448nAOrvfw/profile-displayphoto-shrink_400_400/0/1516929476300?e=2147483647&v=beta&t=i9xTbCh2nx3upQEx53PPtGP28Da2T7i_AJOTsqQRliE';
        $admin->addMediaFromUrl($imageUrl)->usingFileName('admin.png')->toMediaCollection('avatar');

        // assign role
        $admin->assignRole('admin');
    }
}
