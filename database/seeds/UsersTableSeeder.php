<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lucifer',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret'),
            'saved' => [1, 5, 7, 9]
        ]);
    }
}
