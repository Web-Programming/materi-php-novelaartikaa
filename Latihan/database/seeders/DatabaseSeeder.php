<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //menggunakan query builder
        // DB::table("users") -> insert([
        //     'name' => 'Novela',
        //     'email' => 'novelaartika@gmail.com',
        //     'password' => Hash::make("password")
        //]);

        DB::table("users")
        ->where("id",1)
        ->update([
            'password' => Hash::make("12345")
        ]);
    }
}