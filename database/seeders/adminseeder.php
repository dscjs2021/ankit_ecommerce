<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin1@gmail.com',
            // 'email_verified_at'=>'',
            'role'=>1,
            'password'=>Hash::make('12345678'),
            // 'remember_token'=>'',
            // 'created_at'=>'',
            // 'updated_at'=>''
        ]);
    }
}
