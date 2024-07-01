<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pekerjaans')->insert([
            [
                'name' => 'BELUM/TIDAK BEKERJA'
            ],
            [
                'name' => 'MENGURUS RUMAH TANGGA'
            ],
            [
                'name' => 'PELAJAR/MAHASISWA'
            ],
            [
                'name' => 'PENSIUNAN'
            ],
            [
                'name' => 'PEGAWAI NEGERI SIPIL (PNS)'
            ],
            [
                'name' => 'TENTARA NASIONAL INDONESIA (TNI)'
            ],
            [
                'name' => 'KEPOLISIAN RI (POLRI)'
            ],
            [
                'name' => 'PERDAGANGAN'
            ],
            [
                'name' => 'PETANI/PEKEBUN'
            ],
            [
                'name' => 'PETERNAK'
            ],
            [
                'name' => 'NELAYAN/PERIKANAN'
            ],
            [
                'name' => 'INDUSTRI'
            ],
            [
                'name' => 'KONSTRUKSI'
            ],
            [
                'name' => 'TRANSPORTASI'
            ],
            [
                'name' => 'KARYAWAN SWASTA'
            ],
            [
                'name' => 'KARYAWAN BUMN'
            ],
            [
                'name' => 'KARYAWAN BUMD'
            ],
            [
                'name' => 'KARYAWAN HONORER'
            ],
            [
                'name' => 'BURUH HARIAN LEPAS'
            ],
            [
                'name' => 'BURUH TANI/PERKEBUNAN'
            ],
            [
                'name' => 'BURUH NELAYAN/PERIKANAN'
            ],
            [
                'name' => 'BURUH PETERNAKAN'
            ],
            [
                'name' => 'PEMBANTU RUMAH TANGGA'
            ],
            [
                'name' => 'TUKANG CUKUR'
            ],
            [
                'name' => 'TUKANG LISTRIK'
            ],
            [
                'name' => 'TUKANG BATU'
            ],
            [
                'name' => 'TUKANG KAYU'
            ],
            [
                'name' => 'TUKANG SOL SEPATU'
            ],
            [
                'name' => 'TUKANG LAS/PANDAI BESI'
            ],
            [
                'name' => 'TUKANG JAHIT'
            ],
            [
                'name' => 'TUKANG GIGI'
            ],
            [
                'name' => 'PENATA RIAS'
            ],
            [
                'name' => 'PENATA BUSANA'
            ],
            [
                'name' => 'PENATA RAMBUT'
            ],
            [
                'name' => 'MEKANIK'
            ],
            [
                'name' => 'SENIMAN'
            ],
            [
                'name' => 'TABIB'
            ],
            [
                'name' => 'PARAJI'
            ],
            [
                'name' => 'PENTERJEMAH'
            ],
            [
                'name' => 'IMAM MASJID'
            ],
            [
                'name' => 'PENDETA'
            ],
            [
                'name' => 'PASTOR'
            ],
            [
                'name' => 'WARTAWAN'
            ],
            [
                'name' => 'USTADZ/MUBALIGH'
            ],
            [
                'name' => 'JURU MASAK'
            ],
            [
                'name' => 'PROMOTOR ACARA'
            ],
            [
                'name' => 'ANGGOTA DPR-RI'
            ],
            [
                'name' => 'ANGGOTA DPD'
            ],
            [
                'name' => 'ANGGOTA BPK'
            ],
            [
                'name' => 'PRESIDEN'
            ],
            [
                'name' => 'WAKIL PRESIDEN'
            ],
            [
                'name' => 'ANGGOTA MAHKAMAH KONSTITUSI'
            ],
            [
                'name' => 'ANGGOTA MENTERI KABINET'
            ],
            [
                'name' => 'DITA BESAR'
            ],
            [
                'name' => 'GUBERNUR'
            ],
            [
                'name' => 'WAKIL GUBERNUR'
            ],
            [
                'name' => 'BUPATI'
            ],
            [
                'name' => 'WAKIL BUPATI'
            ],
            [
                'name' => 'WALIKOTA'
            ],
            [
                'name' => 'WAKIL WALIKOTA'
            ],
            [
                'name' => 'ANGGOTA DPRD PROVINSI'
            ],
            [
                'name' => 'ANGGOTA DPRD KABUPATEN/KOTA'
            ],
            [
                'name' => 'DOSEN'
            ],
            [
                'name' => 'GURU'
            ],
            [
                'name' => 'PILOT'
            ],
            [
                'name' => 'PENGACARA'
            ],
            [
                'name' => 'NOTARIS'
            ],
            [
                'name' => 'ARSITEK'
            ],
            [
                'name' => 'AKUNTAN'
            ],
            [
                'name' => 'KONSULTAN'
            ],
            [
                'name' => 'DOKTER'
            ],
            [
                'name' => 'BIDAN'
            ],
            [
                'name' => 'PERAWAT'
            ],
            [
                'name' => 'APOTEKER'
            ],
            [
                'name' => 'PSIKIATER/PSIKOLOG'
            ],
            [
                'name' => 'PENYIAR TELEVISI'
            ],
            [
                'name' => 'PENYIAR RADIO'
            ],
            [
                'name' => 'PELAUT'
            ],
            [
                'name' => 'PENELITI'
            ],
            [
                'name' => 'SOPIR'
            ],
            [
                'name' => 'PIALANG'
            ],
            [
                'name' => 'PARANORMAL'
            ],
            [
                'name' => 'PEDAGANG'
            ],
            [
                'name' => 'PERANGKAT DESA'
            ],
            [
                'name' => 'KEPALA DESA'
            ],
            [
                'name' => 'BIARAWATI'
            ],
            [
                'name' => 'WIRASWASTA'
            ],
            [
                'name' => 'LAINNYA'
            ],
        ]);
    }
}
