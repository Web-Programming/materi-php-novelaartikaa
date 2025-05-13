<?php

namespace Database\Seeders;
use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        prodi::create([
        'nama' => 'sistem informasi',
        'kode_prodi' =>'SI'
        ]);
        prodi::create([
        'nama' => 'informatika',
        'kode_prodi' =>'IF'
        ]);
    }
}
