<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;
use Buihuycuong\Vnfaker\VNFaker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            'name' => "phuong",
            'mail_address' => "phuong@gmail.com",
            'password' => Hash::make("dksjfkdsjf"),
            'phone' => "0976594507",
            'created_at' => "2005-11-11 22:29:41",
            'updated_at' => "2005-11-11 22:29:41",
            'deleted_at' => "2005-11-11 22:29:41",
        ]);
     
    }
}
