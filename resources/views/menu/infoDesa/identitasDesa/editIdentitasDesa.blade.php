@extends('components.layout')

@section('content')
    <div class="row">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3 mt-3">
                <a href="{{ route('infoDesa-identitasDesa') }}" class="btn btn-secondary"><i class="ri-arrow-left-circle-line"></i></a>
                <h3 class="text-info fw-bold mt-2">Edit Identitas Desa</h3>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-form bg-white mt-3">
                <div class="half-image"></div>
                <div class="row col-12 col-md-11 justify-content-center mx-auto mt-2 p-2 text-info rounded-2" style="background-color: #0075C4">
                    <span class="position-absolute text-center align-items-center text-white mt-1">Ubah Foto Background</span>
                    <input type="file" name="" style="cursor: pointer; opacity: 0;" id="">
                </div>
                <div class="row col-12 col-md-12 mx-auto p-3">
                    <form action="" class="row">
                        <div class="row col-12 col-md-12 justify-content-center align-items-center mx-auto mb-3">
                            <div class="row col-12 col-md-12 col-sm-12 col-lg-2 col-xl-2 justify-content-center gap-3">
                                <img src="{{ asset('assets/admin/img/bitkreasi.png') }}" style="width: 200px" class="rounded-circle" alt="">
                                <div class="row col-12 col-md-11 justify-content-center mx-auto mt-2 mb-3 p-2 text-info rounded-2" style="background-color: #0075C4">
                                    <span class="position-absolute text-center align-items-center text-white mt-1">Pilih Foto</span>
                                    <input type="file" name="" style="cursor: pointer; opacity: 0;" id="">
                                </div>
                            </div>
                            <div class="row col-12 col-md-12 col-sm-12 col-lg-10 col-xl-10">
                                <div class="d-flex flex-column align-middle">
                                    <input type="text" class="form-control mb-3" id="" placeholder="nama desa" value="Desa Grendeng">
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="Kecamatan Purwokerto Utara, Kabupaten Banyumas, Provinsi Jawa Tengah">
                                </div>
                            </div>
                        </div>

                        {{-- Desa --}}
                        <div class="row col-12 col-md-12 p-3 mb-3 mx-auto align-items-center border-color-card-blue">
                            <span class="fw-bold text-info fs-5 mb-3">Data Desa</span>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Desa</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="Grendeng">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Kode Desa</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="73.10.11.2001">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Kode Pos Desa</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="53122">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Kepala Desa</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="Vindra Arya Yulian">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">NIP Kepala Desa</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="330010201020001">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Alamat Kantor Desa</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="Jalan Kenanga, Kelurahan Grendeng">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Email Desa</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="grendeng@gmail.id">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor Telepon Desa</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="083104788904">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor Ponsel Desa</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="083104788904">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-2">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor Telepon Desa</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="grendeng.desa.id">
                                </div>
                            </div>
                        </div>

                        {{-- Kecamatan --}}
                        <div class="row col-12 col-md-12 p-3 mb-3 mx-auto align-items-center border-color-card-blue">
                            <span class="fw-bold text-info fs-5 mb-3">Kecamatan</span>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Kecamatan</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="Purwokerto Utara">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Kode Kecamatan</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="73.10.11.2001">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Camat</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="Vindra Arya Yulian">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-3 col-xl-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">NIP Camat</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="330201020102">
                                </div>
                            </div>
                        </div>

                        {{-- Kabupaten --}}
                        <div class="row col-12 col-md-6 p-3 mb-3 mx-auto align-items-center border-color-card-blue">
                            <span class="fw-bold text-info fs-5 mb-3">Kabupaten</span>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Kabupaten</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="Banyumas">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Kode Kabupaten</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="73.10.11.2001">
                                </div>
                            </div>
                        </div>

                        {{-- Provinsi --}}
                        <div class="row col-12 col-md-6 p-3 mb-3 mx-auto align-items-center border-color-card-blue">
                            <span class="fw-bold text-info fs-5 mb-3">Provinsi</span>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Provinsi</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="Jawa Tengah">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Kode Provinsi</label>
                                    <input type="text" class="form-control" id="" placeholder="nama desa" value="73.10.11.2001">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
