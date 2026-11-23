<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'admin',    'full_name' => 'Alice Admin'],
            ['username' => 'cashier1', 'full_name' => 'Carlo Cruz'],
            ['username' => 'cashier2', 'full_name' => 'Dina Ramos'],
            ['username' => 'manager',  'full_name' => 'Mark Villanueva'],
            ['username' => 'stock1',   'full_name' => 'Nina Flores'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
