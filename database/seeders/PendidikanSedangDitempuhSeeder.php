<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendidikanSedangDitempuhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendidikan_sedang_di_tempuhs')->insert([
            [
                'name' => 'BELUM MASUK TK/KELOMPOK BERMAIN'
            ],
            [
                'name' => 'SEDANG TK/KELOMPOK BERMAIN'
            ],
            [
                'name' => 'TIDAK PERNAH SEKOLAH'
            ],
            [
                'name' => 'SEDANG SD/SEDERAJAT'
            ],
            [
                'name' => 'TIDAK TAMAT SD/SEDERAJAT'
            ],
            [
                'name' => 'SEDANG SLTP/SEDERAJAT'
            ],
            [
                'name' => 'SEDANG SLTA/SEDERAJAT'
            ],
            [
                'name' => 'SEDANG D-1/SEDERAJAT'
            ],
            [
                'name' => 'SEDANG D-2/SEDERAJAT'
            ],
            [
                'name' => 'SEDANG D-3/SEDERAJAT'
            ],
            [
                'name' => 'SEDANG S-1/SEDERAJAT'
            ],
            [
                'name' => 'SEDANG S-2/SEDERAJAT'
            ],
            [
                'name' => 'SEDANG S-3/SEDERAJAT'
            ],
            [
                'name' => 'SEDANG SLB A/SEDERAJAT'
            ],
            [
                'name' => 'SEDANG SLB B/SEDERAJAT'
            ],
            [
                'name' => 'SEDANG SLB C/SEDERAJAT'
            ],
            [
                'name' => 'TIDAK DAPAT MEMBACA/MENULIS HURUF LATIN/ARAB'
            ],
            [
                'name' => 'TIDAK SEDANG SEKOLAH'
            ]
        ]);
    }
}
