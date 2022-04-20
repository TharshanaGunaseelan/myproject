<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Tharsan',
            'lastname' => 'Gunasingam',
            'address' => 'mannar',
            'email' => 'abc@gmail.com',
            'nic' => '123',
            'role_id' => 1,
            'password' => Hash::make(12345678),
            'phonenumber'=> 7793844,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
