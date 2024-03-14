<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'user',
            'member-lvl1',
            'member-lvl2',
            'member-lvl3',
            'admin'
        ];

        foreach($roles as $role) {
            Role::create([
                'name' => $role
            ]);
        }
    }
}
