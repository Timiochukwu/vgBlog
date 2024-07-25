<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed customer account
        User::create([
            'account_name' => 'Oladipupo Oluwatimilehin',
            'phone_number' => '08108307955',
            'email' => 'timi@gmail.com',
            'account_type_name' => 'Saving',
            'account_number' => '8108307955',
            'account_balance' => '5000',
            'status' => 'active',
            'visibility' => '1',
            'password' => bcrypt('password'),
        ]);

          // Seed customer account
          User::create([
            'account_name' => 'Bolariwa Fowowe',
            'phone_number' => '08135626225',
            'email' => 'fowowe@gmail.com',
            'account_type_name' => 'Current',
            'account_number' => '8135626225',
            'account_balance' => '7000',
            'status' => 'active',
            'visibility' => '1',
            'password' => bcrypt('password'),
          ]);
    }
}
