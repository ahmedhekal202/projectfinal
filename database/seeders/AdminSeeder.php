<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\AdminModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create([
            'name'=>'admin',
            'email'=>'admin@test.com',
            'password'=>'admin@test.com',
            'is_admin'=> 1,
            'email_verified_at' => now(),
            // 'created_at' => now(),
        ]);
    }
}
