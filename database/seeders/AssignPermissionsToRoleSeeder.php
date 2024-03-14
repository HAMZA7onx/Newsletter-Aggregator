<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssignPermissionsToRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Role::where('name', 'user')->first();
        $member_lvl1 = Role::where('name', 'member-lvl1')->first();
        $member_lvl2 = Role::where('name', 'member-lvl2')->first();
        $member_lvl3 = Role::where('name', 'member-lvl3')->first();
        $admin = Role::where('name', 'admin')->first();

        $user->givePermissionTo('user permissions');

        $member_lvl1->givePermissionTo('add favorits');

        $member_lvl2->givePermissionTo('add favorits');
        $member_lvl2->givePermissionTo('see article details');

        $member_lvl3->givePermissionTo('add favorits');
        $member_lvl3->givePermissionTo('see article details');
        $member_lvl3->givePermissionTo('add comments');

        $admin->givePermissionTo('add favorits');
        $admin->givePermissionTo('see article details');
        $admin->givePermissionTo('add comments');
        $admin->givePermissionTo('admin permissions');
    }
}
