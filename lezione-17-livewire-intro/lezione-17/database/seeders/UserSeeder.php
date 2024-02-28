<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name'=>'admin','email'=>'admin@livewire.com','password'=>'admin','is_admin'=>true]);

        
        \App\Models\User::factory(10)->create();

       \App\Models\User::factory(5)->create([
           'name' => 'Test User',
           'password'=>'admin',

       ]);
    }
}
