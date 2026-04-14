<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create Core Permissions
        $permissions = [
            'access_admin',
            'view_users',
            'create_users',
            'edit_users',
            'delete_users',
            'view_roles',
            'create_roles',
            'edit_roles',
            'delete_roles',
        ];

        foreach ($permissions as $permission) {
            \Spatie\Permission\Models\Permission::firstOrCreate(['name' => $permission]);
        }

        // 2. Create Roles
        $superAdmin = Role::firstOrCreate(['name' => 'Super Admin']);
        $manager = Role::firstOrCreate(['name' => 'Manager']);
        $viewer = Role::firstOrCreate(['name' => 'Viewer']);

        // Assign all permissions to Super Admin (though BasePolicy bypasses this, it's good for DB logic)
        $superAdmin->syncPermissions(\Spatie\Permission\Models\Permission::all());

        // 3. Create the first Super Admin
        $admin = User::firstOrCreate(
            ['phone' => '07742209251'],
            [
                'name' => 'المدير العام',
                'employee_id' => 'a1',
                'password' => Hash::make('12345678'),
                'status' => 'active',
            ]
        );

        $admin->assignRole($superAdmin);

        $this->command->info('تم إنشاء نظام الصلاحيات والمدير الأول بنجاح!');
    }
}
