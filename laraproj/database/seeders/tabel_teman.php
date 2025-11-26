<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tabel_teman extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('temans')->insert([
            'nama'=>'Irawantina',
            'alamat'=>'Jl. Nawar Berduri Indah',
            'kota'=>'Denpasar',
            'wa'=>'088888111',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
