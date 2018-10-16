<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

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
            'name'  => 'Sinisa Manojlovic',
            'email' => 'sinisa_mano@gmail.com',
            'password' => Hash::make('sinisa'),
            'remember_token' => str_random(10),
        ]);
    }
}
