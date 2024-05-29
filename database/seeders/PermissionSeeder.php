<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /** 
     * Run the database seeds. 
     */
    public function run(): void
    {
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-product',
            'edit-product',
            'delete-product',
            'view-user',
            'create-book',
            'edit-book',
            'delete-book',
            'view-book',
            'create-employee',
            'edit-employee',
            'delete-employee',
            'view-employee',
            
        ];
        // Looping and Inserting Array's Permissions into Permission Table 
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
