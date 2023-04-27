<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\AdminModel;
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
        // Admins::create([
        //     'name'=>'ahmed hekal',
        //     'email'=>'ahmedhekal@gmail.com',
        //     'password'=>Hash::make('ahmed2020'),
        //     'status'=>'1'
        // ]);
        AdminModel::create([
            'name'=>'ahmed hekall',
            'email'=>'ahmedhekallll@gmail.com',
            'password'=>'ahmed202020',
            'status'=>'1'
        ]);
    }
}
