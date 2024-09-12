<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Role::create([
            'name' => 'super-admin',
         ]);
       User::create([
            'name' => 'SuperAdmin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789'),
            'type' => 'super_admin',
            'honorific' => 'Mr',
            'gender' => 'male',
            'mobile' => '01559470947',
            'national_id' => '12345678901234',
            'email_verified_at' => now(),

        ]);
        $role = Role::create(['name' => 'super-admin']);
        $user = User::find(1);
        $user->assignRole($role);
    }
}
