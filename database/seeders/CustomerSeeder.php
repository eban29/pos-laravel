<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Maria Santos',   'email' => 'maria@example.com', 'phone' => '0917-111-2222'],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com',  'phone' => '0917-333-4444'],
            ['full_name' => 'Ana Reyes',      'email' => 'ana@example.com',   'phone' => '0917-555-6666'],
            ['full_name' => 'Pedro Lim',      'email' => 'pedro@example.com', 'phone' => '0917-777-8888'],
            ['full_name' => 'Liza Tan',       'email' => 'liza@example.com',  'phone' => '0917-999-0000'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
