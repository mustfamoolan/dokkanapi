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
        // 1. Create Roles
        $superAdmin = Role::firstOrCreate(['name' => 'Super Admin']);
        $manager = Role::firstOrCreate(['name' => 'Manager']);
        $support = Role::firstOrCreate(['name' => 'Support']);

        // 2. Create the first Super Admin
        $admin = User::firstOrCreate(
            ['phone' => '07742209251'], // الرقم الافتراضي للبدء
            [
                'name' => 'المدير العام',
                'employee_id' => 'a1',
                'password' => Hash::make('12345678'),
                'status' => 'active',
            ]
        );

        $admin->assignRole($superAdmin);

        $this->command->info('تم إنشاء المدير الأول بنجاح!');
        $this->command->info('الهاتف: 07742209251');
        $this->command->info('المعرف: a1');
        $this->command->info('كلمة المرور: 12345678');
    }
}
