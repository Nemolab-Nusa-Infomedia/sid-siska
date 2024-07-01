<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisKelahiranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_kelahirans')->insert([
            [
                'name' => 'TUNGGAL'
            ],
            [
                'name' => 'KEMBAR 2'
            ],
            [
                'name' => 'KEMBAR 3'
            ],
            [
                'name' => 'KEMBAR 4'
            ],
        ]);
    }
}
