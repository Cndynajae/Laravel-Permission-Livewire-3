<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat permissions
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage roles']);
        Permission::create(['name' => 'manage permissions']);

        // Buat roles dan assign permissions
        $admin = Role::create(['name' => 'admin']);
        $guru = Role::create(['name' => 'guru']);

        // Admin punya semua akses
        $admin->givePermissionTo(Permission::all());

        // Guru hanya punya akses untuk view users
        $guru->givePermissionTo('view users');
    }
}
