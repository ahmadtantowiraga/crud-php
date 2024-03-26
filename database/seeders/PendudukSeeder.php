<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('penduduks')->insert([
            'nama' => 'Ahmad Tanto Wiraga',
            'jeniskelamin' => 'Laki-laki',
            'umur' => '22',
            'NIK' => '122345500009',
            'kota' => 'Cilacap',
        ]);
    }
}
