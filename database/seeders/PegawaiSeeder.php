<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            'nama_pegawai' => 'Juna',
            'nama_jabatan' => 'Web Designer',
            'pegawai_umur' => 30,
            'alamat' => 'JL.Popongan'
        ]);
    }
}
