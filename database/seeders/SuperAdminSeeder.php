<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /** 
     * Run the database seeds. 
     */
    public function run(): void
    {
        // Creating Super Admin User 
        $superAdmin = User::create([
            'name' => 'Nashya',
            'email' => 'superadmin@roles.id',
            'password' => Hash::make('123456')
        ]);
        $superAdmin->assignRole('Super Admin');
        
        $admin = User::create([
            'name' => 'Shafa',
            'email' => 'admin@roles.id',
            'password' => Hash::make('123456')
        ]);
        $admin->assignRole('Admin');

        $pengunjung = User::create([
            'name' => 'Erdika',
            'email' => 'pengunjung@roles.id',
            'password' => Hash::make('123456')
        ]);
        $pengunjung->assignRole('Pengunjung');
    }
}
