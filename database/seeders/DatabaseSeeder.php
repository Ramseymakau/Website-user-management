<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // User::factory(1)->create();

        
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'student']);  
        Role::create(['name' => 'teacher']); 
        
    }
}
