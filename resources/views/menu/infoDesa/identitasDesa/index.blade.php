@extends('components.layout')

@section('content')
    <div class="row">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3 mt-3">
                <h3 class="text-info fw-bold mt-2">Identitas Desa</h3>
            </div>
            <div class="d-flex align-items-center mt-3 gap-2">
                <a href="{{ route('infoDesa-identitasDesa-edit') }}" class="btn btn-sis-blue text-info"><i class="ri-ball-pen-line"></i> Ubah Identitas Desa</a>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-form bg-white mt-3">
                <div class="half-image"></div>
                <div class="row col-12 col-md-12 mx-auto p-3">
                    <div class="row col-12 col-md-12 justify-content-center align-items-center mx-auto mb-3">
                        <div class="row col-12 col-md-2 justify-content-center">
                            <img src="{{ asset('assets/admin/img/bitkreasi.png') }}" style="width: 200px" class="rounded-circle" alt="">
                        </div>
                        <div class="row col-12 col-md-10">
                            <div class="d-flex flex-column align-middle">
                                <span class="text-info fw-bold fs-5">Desa Grendeng</span>
                                <span class="text-info">Kecamatan Purwokerto Utara, Kabupaten Banyumas, Provinsi Jawa Tengah</span>
                                <div class="d-flex align-items-center mt-3 gap-2">
                                    <a href="{{ route('kependudukan-penduduk-edit') }}" class="btn btn-sis-blue text-info"><i class="ri-ball-pen-line"></i> Lokasi Kantor Desa</a>
                                    <a href="{{ route('kependudukan-penduduk-edit') }}" class="btn btn-sis-blue text-info"><i class="ri-ball-pen-line"></i> Peta Wilayah Desa</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Desa --}}
                    <div class="row col-12 col-md-12 p-3 mb-3 mx-auto align-items-center border-color-card-blue">
                        <span class="fw-bold text-info fs-5 mb-3">Data Desa</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Nama Desa</span>
                                <span>Grendeng</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Kode Desa</span>
                                <span>73.10.11.2001</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Kode Pos Desa</span>
                                <span>53122</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Nama Kepala Desa</span>
                                <span>Vindra Arya Yulian</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">NIP Kepala Desa</span>
                                <span>330010201020001</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold" style="font-size: .8rem">Alamat Kantor Desa</span>
                                <span style="font-size: .8rem">Jalan Kenanga, Kelurahan Grendeng</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Email Desa</span>
                                <span>grendeng@gmail.id</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Nomor Telepon Desa</span>
                                <span>083104788904</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Nomor Ponsel Desa</span>
                                <span>083104</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Website Desa</span>
                                <span>Grendeng.desa.id</span>
                            </div>
                        </div>
                    </div>

                    {{-- Kecamatan --}}
                    <div class="row col-12 col-md-12 p-3 mb-3 mx-auto align-items-center border-color-card-blue">
                        <span class="fw-bold text-info fs-5 mb-3">Kecamatan</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Nama Kecamatan</span>
                                <span>Purwokerto Utara</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Kode Kecamatan</span>
                                <span>73.10.11.2001</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Nama Camat</span>
                                <span>Vindra Arya Yulian</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">NIP Camat</span>
                                <span>330201020102</span>
                            </div>
                        </div>
                    </div>

                    {{-- Kabupaten --}}
                    <div class="row col-12 col-md-6 p-3 mb-3 mx-auto align-items-center border-color-card-blue">
                        <span class="fw-bold text-info fs-5 mb-3">Kabupaten</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Nama Kabupaten</span>
                                <span>Banyumas</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Kode Kabupaten</span>
                                <span>73.10.11.2001</span>
                            </div>
                        </div>
                    </div>

                    {{-- Provinsi --}}
                    <div class="row col-12 col-md-6 p-3 mb-3 mx-auto align-items-center border-color-card-blue">
                        <span class="fw-bold text-info fs-5 mb-3">Provinsi</span>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Nama Provinsi</span>
                                <span>Jawa Tengah</span>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                            <div class="mb-2 row gap-1">
                                <span class="text-secondary fw-bold">Kode Provinsi</span>
                                <span>73.10.11.2001</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
