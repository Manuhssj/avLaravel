<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Facades\Hash;
use Illuminate\Facades\DB;

class Users_Seeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Manuel Alejandro",
            'email' => "mdiaz_19@alu,uabcs.mx",
            'password' => Hash::make('password')
        ]);
    }
}
