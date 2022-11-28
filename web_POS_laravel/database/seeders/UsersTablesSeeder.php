<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
			'name'				=> 'Johnny Copperhand',
			'email'				=> 'john_copper@gmail.com',
			'password'			=> Hash::make('bandwag0n'),
			'remember_token'	=> str_random(10),
			]);
    }
}
