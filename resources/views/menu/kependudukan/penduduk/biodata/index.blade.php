@extends('components.layout')

@section('content')
    <div class="row">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3 mt-3">
                <a href="{{ route('kependudukan-penduduk') }}" class="btn btn-secondary"><i class="ri-arrow-left-circle-line"></i></a>
                <h3 class="text-info fw-bold mt-2">Detail Penduduk</h3>
            </div>
            <div class="d-flex align-items-center mt-3 gap-2">
                <a href="{{ route('kependudukan-penduduk-edit') }}" class="btn btn-sis-blue text-info"><i class="ri-ball-pen-line"></i> Edit</a>
                <a href="{{ route('kependudukan-penduduk-cetakDetail') }}" target="_blank" class="btn btn-sis-blue text-info"><i class="ri-article-line"></i> Cetak detail</a>
                <a href="{{ route('kependudukan-penduduk-hapus') }}" class="btn btn-hapus text-danger"><i class="ri-delete-bin-5-line"></i> Hapus</a>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-form p-3 bg-white mt-3">
                <div class="row col-12 col-md-12 mx-auto p-3">
                    {{-- row pertama --}}
                    <div class="row col-12 col-md-12 mx-auto">
                        <div class="row col-12 col-md-4 justify-content-center align-items-center mx-auto p-2">
                            <img src="{{ asset('assets/admin/img/vindra.jpeg') }}" class="rounded-circle p-2" style="border: 2px solid #03aae771" alt="">
                        </div>
                        <div class="row col-12 col-md-8 p-3 mx-auto align-items-center border-color-card-blue">
                            <span class="fw-bold fs-5">Data Diri</span>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-4 col-xl-4">
                                <div class="mb-3 row gap-1">
                                    <span class="text-secondary fw-bold">Nama lengkap</span>
                                    <span>Vindra Arya Yulian</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-4 col-xl-4">
                                <div class="mb-3 row gap-1">
                                    <span class="text-secondary fw-bold">Nomor NIK</span>
                                    <span>330010201020001</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-4 col-xl-4">
                                <div class="mb-3 row gap-1">
                                    <span class="text-secondary fw-bold">Nomor KK sebelumnya</span>
                                    <span>330010201020001</span>
                                </div>
                            </div>
                            <div class="row col-12 col-md-12 mb-3 mx-auto p-3 border-color-card-blue">
                                <span class="fw-bold fs-5 mb-2">Status Kepemilikan Identitas</span>
                                <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                                    <div class="mb-3 row gap-1">
                                        <span class="text-secondary fw-bold">Wajib identitas</span>
                                        <span>Wajib</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                                    <div class="mb-3 row gap-1">
                                        <span class="text-secondary fw-bold">Identitas elektronik</span>
                                        <span>KTP-EL</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                                    <div class="mb-3 row gap-1">
                                        <span class="text-secondary fw-bold">Status rekam</span>
                                        <span>Sudah Rekam</span>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                                    <div class="mb-3 row gap-1">
                                        <span class="text-secondary fw-bold">Tag ID card</span>
                                        <span>LK25076</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-4 col-xl-4">
                                <div class="mb-3 row gap-1">
                                    <span class="text-secondary fw-bold">Jenis kelamin</span>
                                    <span>Laki-laki</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-4 col-xl-4">
                                <div class="mb-3 row gap-1">
                                    <span class="text-secondary fw-bold">Agama</span>
                                    <span>Islam</span>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-4 col-xl-4">
                                <div class="mb-3 row gap-1">
                                    <span class="text-secondary fw-bold">Status penduduk</span>
                                    <span>Tetap</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Status Kepemilikan Identitas --}}
                    <div class="row col-12 col-md-12 mt-5 mb-3 mx-auto p-3 border-color-card-blue">
                        <span class="fw-bold fs-5 mb-2">Status Kepemilikan Identitas</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Wajib identitas</span>
                                <span>Wajib</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Identitas elektronik</span>
                                <span>KTP-EL</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Status rekam</span>
                                <span>Sudah Rekam</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Tag ID card</span>
                                <span>LK25076</span>
                            </div>
                        </div>
                    </div>

                    {{-- Jenis Penduduk --}}
                    <div class="row col-12 col-md-12 mb-3 mx-auto p-3 border-color-card-blue">
                        <span class="fw-bold fs-5 mb-2">Jenis Penduduk</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Tanggal lapor</span>
                                <span>26-06-2006</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Jenis penduduk</span>
                                <span>Penduduk Lahir</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Tanggal masuk</span>
                                <span>-</span>
                            </div>
                        </div>
                    </div>

                    {{-- Data Kelahiran --}}
                    <div class="row col-12 col-md-12 mb-3 mx-auto p-3 border-color-card-blue">
                        <span class="fw-bold fs-5 mb-2">Data Kelahiran</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Nomor Akta Kelahiran</span>
                                <span>330010201020001</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Kota kelahiran</span>
                                <span>Purwokerto Banyumas</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Tanggal lahir</span>
                                <span>25-07-2006</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Waktu kelahiran</span>
                                <span>20.06</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Tempat dilahirkan</span>
                                <span>RSUD DKT</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Jenis kelahiran</span>
                                <span>Tunggal</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Anak ke</span>
                                <span>3</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Tenaga kesehatan</span>
                                <span>Bidan/Perawat</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Berat lahir</span>
                                <span>3500 Gram</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Panjang lahir</span>
                                <span>50 cm</span>
                            </div>
                        </div>
                    </div>

                    {{-- Pendidikan dan Pekerjaan --}}
                    <div class="row col-12 col-md-12 mb-3 mx-auto p-3 border-color-card-blue">
                        <span class="fw-bold fs-5 mb-2">Pendidikan dan Pekerjaan</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Pendidikan dalam KK</span>
                                <span>S1</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Pendidikan yang sedang ditempuh</span>
                                <span>Sedang S-2/Sederajat</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Pekerjaan</span>
                                <span>Programmer</span>
                            </div>
                        </div>
                    </div>

                    {{-- Data Kewarganegaraan --}}
                    <div class="row col-12 col-md-12 mb-3 mx-auto p-3 border-color-card-blue">
                        <span class="fw-bold fs-5 mb-2">Data Kewarganegaraan</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Suku/Etnis</span>
                                <span>Jawa</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Status warga Negara</span>
                                <span>WNI</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Nomor Paspor</span>
                                <span>KJ0102030405</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Tanggal berakhir paspor</span>
                                <span>28-06-2024</span>
                            </div>
                        </div>
                    </div>

                    {{-- Data Orang Tua --}}
                    <div class="row col-12 col-md-12 mb-3 mx-auto p-3 border-color-card-blue">
                        <span class="fw-bold fs-5 mb-2">Data Orang Tua</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Nama Ayah</span>
                                <span>Rikun</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">NIK Ayah</span>
                                <span>3302010201020001</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Nama Ibu</span>
                                <span>Harti</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">NIK Ibu</span>
                                <span>3302010201020001</span>
                            </div>
                        </div>
                    </div>

                    {{-- Alamat --}}
                    <div class="row col-12 col-md-12 mb-3 mx-auto p-3 border-color-card-blue">
                        <span class="fw-bold fs-5 mb-2">Alamat</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Dusun</span>
                                <span>Grendeng</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <div class="d-flex">
                                    <div class="row">
                                        <span class="text-secondary fw-bold">RT</span>
                                        <span>02</span>
                                    </div>
                                    <div class="row">
                                        <span class="text-secondary fw-bold">RW</span>
                                        <span>01</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Nomor Telepon</span>
                                <span>083104788904</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Email</span>
                                <span>vindrayulian@gmail.com</span>
                            </div>
                        </div>
                    </div>

                    {{-- Status Pernikahan --}}
                    <div class="row col-12 col-md-12 mb-3 mx-auto p-3 border-color-card-blue">
                        <span class="fw-bold fs-5 mb-2">Status Pernikahan</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Status nikah</span>
                                <span>Belum kawin</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">No akta nikah (Buku Nikah)</span>
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Tanggal pernikahan</span>
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Akta perceraian</span>
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Tanggal perceraian</span>
                                <span>-</span>
                            </div>
                        </div>
                    </div>

                    {{-- Data Kesehatan --}}
                    <div class="row col-12 col-md-12 mb-3 mx-auto p-3 border-color-card-blue">
                        <span class="fw-bold fs-5 mb-2">Data Kesehatan</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Golongan darah</span>
                                <span>B+</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Sakit Menahun</span>
                                <span>Tidak ada/Tidak sakit</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Akseptor KB</span>
                                <span>-</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Jenis BPJS</span>
                                <span>Tidak/Belum punya</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Nomor BPJS</span>
                                <span>Tidak/Belum punya</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Cacatan Riwayat Kesehatan</span>
                                <span>-</span>
                            </div>
                        </div>
                    </div>

                    {{-- Lainnya --}}
                    <div class="row col-12 col-md-12 mb-3 mx-auto p-3 border-color-card-blue">
                        <span class="fw-bold fs-5 mb-2">Lainnya</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Dapat membaca huruf</span>
                                <span>Indonesia, Jawa, Ngapak</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                            <div class="mb-3 row gap-1">
                                <span class="text-secondary fw-bold">Cacatan</span>
                                <span>-</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
