<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => Str::random(10),
            'mobile' => Str::random(10),
            'location' => Str::random(10),
            'description' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ], [
            'name' => Str::random(10),
            'mobile' => Str::random(10),
            'location' => Str::random(10),
            'description' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ], [
            'name' => Str::random(10),
            'mobile' => Str::random(10),
            'location' => Str::random(10),
            'description' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ], [
            'name' => Str::random(10),
            'mobile' => Str::random(10),
            'location' => Str::random(10),
            'description' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
