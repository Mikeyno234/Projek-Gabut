<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = 
        [
            [
                'name'=>'Admin',
                'email'=> 'Admin1234@gmail.com',
                'role'=>'Admin',
                'password'=> bcrypt('22334455'),
            ],

            [
                'name'=>'Karyawan',
                'email'=> 'mulyanaputrahanif@gmail.com',
                'role'=>'Karyawan',
                'password'=> bcrypt('04012007'),
            ],
        ];

        foreach ($usersData as $key => $val) 
        {
            User ::create($val);
        }

    }
}
