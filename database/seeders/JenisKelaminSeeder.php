<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_kelamins')->insert([
            [
                'name' => 'LAKI-LAKI'
            ],
            [
                'name' => 'PEREMPUAN'
            ]
        ]);
    }
}
