@extends('components.layout')

@section('content')
    <div class="row">
        <div class="d-flex align-items-center gap-3 mt-3 ms-3">
            <a href="{{ route('kependudukan-penduduk-detail') }}" class="btn btn-secondary"><i class="ri-arrow-left-circle-line"></i></a>
            <h3 class="text-info fw-bold mt-2">Edit Penduduk</h3>
        </div>
        <form action="">
            <div class="row col-12 col-md-12 mx-auto">
                <div class="col-12 col-md-3 mx-auto">
                    <div class="card card-form p-3 bg-white mt-3">
                        <div class="row col-12 justify-content-between align-items-center gap-4 mx-auto">
                            <div class="row col-md-12 gap-3 align-items-center">
                                <img src="{{ asset('assets/admin/img/vindra.jpeg') }}" class="rounded-circle" width="80px" alt="">
                                <div class="d-flex flex-column align-middle">
                                    <span class="">Foto Profile</span>
                                    <span class="">PNG, JEPG, dibawah 2MB</span>
                                </div>
                            </div>
                            <div class="upload-file row col-md-12 mx-auto justify-content-center align-items-center bg-primary rounded-3 mx-auto" style="width: 240px; height: 50px;">
                                <input class="opacity-0 position-absolute cursor-pointer" style="width: 240px; height: 50px; cursor: pointer;" type="file" id="formFileDisabled">
                                <span class="mx-auto text-white"><i class="ri-file-upload-fill"></i> Unggah Foto</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    {{-- Jenis Penduduk --}}
                    <div class="card card-form p-3 bg-white mt-3">
                        <div class="row col-12 col-md-12 mx-auto">
                            <span class="fw-bold fs-5 mb-3">Jenis Penduduk</span>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal Lapor</label>
                                    <input type="date" class="form-control" id="" aria-describedby="">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-4">
                                <label for="inputState" class="form-label">Jenis Penduduk</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" id="" aria-describedby="">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Data diri --}}
                    <div class="card card-form p-3 bg-white mt-3">
                        <div class="row col-12 col-md-12 mx-auto">
                            <span class="fw-bold fs-5 mb-3">Data Diri</span>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="" placeholder="nama lengkap">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor NIK</label>
                                    <input type="text" class="form-control" id="" placeholder="3302">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-4">
                                <label for="inputState" class="form-label">Peran dalam Kelurga</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Pilih peran</option>
                                    <option>...</option>
                                </select>
                            </div>

                            {{-- status Kepemilikan Identitas --}}
                            <div class="card card-form p-3 mb-4 bg-white mt-3 col-12 col-md-12">
                                <div class="row col-12 col-md-12 mx-auto">
                                    <span class="fw-bold fs-5 mb-3">Status Kepemilikan Identitas</span>
                                    <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between">
                                                <label for="" class="form-label">Wajib Identitas</label>
                                                <span class="text-secondary">Tidak bisa diubah</span>
                                            </div>
                                            <input type="text" class="form-control" id="" placeholder="Belum Ada" disabled>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                        <label for="inputState" class="form-label">Identitas Elektronik</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Pilih identitas</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                        <label for="inputState" class="form-label">Status rekam</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Pilih status rekam</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tag ID card</label>
                                            <input type="text" class="form-control" id="" placeholder="Masukan ID card">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor KK sebelumnya</label>
                                    <input type="text" class="form-control" id="" placeholder="nama lengkap">
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <label for="inputState" class="form-label">Jenis kelamin</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Pilih jenis kelamin</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <label for="inputState" class="form-label">Agama</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Pilih agama</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-3">
                                <label for="inputState" class="form-label">Status penduduk</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Pilih status</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- Data Kelahiran --}}
                    <div class="card card-form p-3 bg-white mt-3">
                        <div class="row col-12 col-md-12 mx-auto">
                            <span class="fw-bold fs-5 mb-3">Data Kelahiran</span>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor akta kelahiran</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan nomor akta">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Kota Kelahiran</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan nama kota">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal lahir</label>
                                    <input type="date" class="form-control" id="" placeholder="pilih tanggal">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Waktu kelahiran</label>
                                    <input type="text" class="form-control" id="" placeholder="pilih waktu">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="inputState" class="form-label">Tempat dilahirkan</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih tempat</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="inputState" class="form-label">Jenis kelahiran</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih jenis kelahiran</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Anak ke</label>
                                    <input type="text" class="form-control" id="" placeholder="anak ke">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="inputState" class="form-label">Tenaga kesehatan</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih tenaga kesehatan</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Berat lahir</label>
                                    <input type="text" class="form-control" id="" placeholder="berat lahir">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Panjang lahir</label>
                                    <input type="text" class="form-control" id="" placeholder="panjang lahir">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Pendidikan dan Pekerjaan --}}
                    <div class="card card-form p-3 bg-white mt-3">
                        <div class="row col-12 col-md-12 mx-auto">
                            <span class="fw-bold fs-5 mb-3">Data Pendidikan dan Pekerjaan</span>
                            <div class="col-12 col-md-4">
                                <label for="inputState" class="form-label">Pendidikan dalam KK</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih pendidikan (dalam KK)</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="inputState" class="form-label">Pendidikan yang sedang ditempuh</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih pendidikan</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="inputState" class="form-label">Pekerjaan</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih pekerjaan</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{-- Data Kewarganegaraan --}}
                    <div class="card card-form p-3 bg-white mt-3">
                        <div class="row col-12 col-md-12 mx-auto">
                            <span class="fw-bold fs-5 mb-3">Data kewarganegaraan</span>
                            <div class="col-12 col-md-3">
                                <label for="inputState" class="form-label">Suku/Etnis</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih Suku/Etnis</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <label for="inputState" class="form-label">Status warga negara</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih status warga negara</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor paspor</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan nomor paspor">
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal berakhir paspor</label>
                                    <input type="date" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Data Orang Tua --}}
                    <div class="card card-form p-3 bg-white mt-3">
                        <div class="row col-12 col-md-12 mx-auto">
                            <span class="fw-bold fs-5 mb-3">Data Orang Tua</span>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Ayah</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan nama ayah">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">NIK Ayah</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan NIK ayah">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan nama ibu">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Masukan NIK Ibu</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan NIK ibu">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Alamat --}}
                    <div class="card card-form p-3 bg-white mt-3">
                        <div class="row col-12 col-md-12 mx-auto">
                            <span class="fw-bold fs-5 mb-3">Alamat</span>
                            <div class="col-12 col-md-4">
                                <label for="inputState" class="form-label">Dusun</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih dusun</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">RT</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan rt">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">RW</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan rw">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan nomor telepon">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="" placeholder="masukan email">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Status Pernikahan --}}
                    <div class="card card-form p-3 bg-white mt-3">
                        <div class="row col-12 col-md-12 mx-auto">
                            <span class="fw-bold fs-5 mb-3">Status Pernikahan</span>
                            <div class="col-12 col-md-4">
                                <label for="inputState" class="form-label">Status nikah</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih status nikah</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">No.Akta Nikah (Buku Nikah)</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan no akta nikah">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal Pernikahan</label>
                                    <input type="date" class="form-control" id="">
                                    <span class="text-secondary">Diisi jika status sudah menikah</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Akta perceraian</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan nomor telepon">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal perceraian</label>
                                    <input type="date" class="form-control" id="">
                                    <span class="text-secondary">Diisi jika status cerai</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Data Kesehatan --}}
                    <div class="card card-form p-3 bg-white mt-3">
                        <div class="row col-12 col-md-12 mx-auto">
                            <span class="fw-bold fs-5 mb-3">Data Kesehatan</span>
                            <div class="col-12 col-md-4 mb-3">
                                <label for="inputState" class="form-label">Golongan darah</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih golongan darah</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <label for="inputState" class="form-label">Cacat</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih jenis cacat</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <label for="inputState" class="form-label">Sakit menahun</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih sakit menahun</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <label for="inputState" class="form-label">Akseptor KB</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih cara KB saat ini</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4 mb-3">
                                <label for="inputState" class="form-label">Pilih asuransi</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih jenis asuransi</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nomor BPJS Ketenagakerjaan</label>
                                    <input type="text" class="form-control" id="" placeholder="masukan nomor BPJS ketenagakerjaan">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Lainnya --}}
                    <div class="card card-form p-3 bg-white mt-3">
                        <div class="row col-12 col-md-12 mx-auto">
                            <span class="fw-bold fs-5 mb-3">Lainnya</span>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="inputState" class="form-label">Golongan darah</label>
                                <select id="inputState" class="form-select">
                                    <option selected>pilih golongan darah</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Catatan</label>
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-end gap-2">
                        <a href="{{ route('kependudukan-penduduk-detail') }}" class="btn btn-outline-dark">Batal</a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                            Edit
                        </button>
                    </div>

                    {{-- pop up --}}
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body row">
                                <span class="fw-bold">Anda yakin akan menyimpan data ini?</span>
                                <span class="text-secondary">Setelah anda menyimpan data ini, anda dapat kembali mengedit data ini dengan pergi ke detail dan edit data.</span>
                            </div>
                            <div class="d-flex justify-content-center p-3 gap-3">
                                <a href="" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Cek Ulang</a>
                                <div class="btn btn-primary">Simpan</div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
