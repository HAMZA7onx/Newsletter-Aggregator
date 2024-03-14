<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AssignRolesToUserSeeder extends Seeder
{

    public function run()
    {
        $user = User::where('email', 'hamza@gmail.com')->first();
        $user->assignRole('admin');
        $user->assignRole('member-lvl1');
        $user->assignRole('member-lvl2');
        $user->assignRole('member-lvl3');

//         $users = User::all();
//         foreach ($users as $user) {
//             $user->assignRole('user');
//         }
    }
}
