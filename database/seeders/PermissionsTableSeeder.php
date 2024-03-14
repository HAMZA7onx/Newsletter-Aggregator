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
        $permissions = [
            'user permissions',
            'add favorits',
            'see article details',
            'add comments',
            'admin permissions'
        ];

        foreach($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
