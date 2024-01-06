<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            [
                'name' => 'user',
                'username' => 'user',
                'password' => \Hash::make('12345'),
                'rolename' => 'user'
            ]
        ]);

        //php artisan db:seed
    }
}
