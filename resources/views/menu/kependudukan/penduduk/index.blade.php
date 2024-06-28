@extends('components.layout')

@section('content')

<div class="row">
    <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
        <h3 class="fw-bold fs-4 text-info">Kependudukan</h3>
        <a href="{{ route('kependudukan-penduduk-tambah') }}" class="btn btn-plus-data">Tambah Data</a>
    </div>
    <div class="col-12">
        <div class="card card-table bg-white p-3">
            <div class="card-header-table">
                <div class="d-flex justify-content-between">
                    <span class="d-flex align-items-center fw-bold text-info">Data Desa Pandak</span>
                    <div class="d-flex gap-3">
                        <form action="" class="d-none d-sm-inline-block">
                            <div class="input-group">
                                <input type="text" class="form-control form-cari border-2 rounded-3" placeholder="cari disini">
                            </div>
                        </form>
                        <div x-data="{ open: false }" class="filter">
                            <a href="#" @click="open = ! open" class="btn btn-filter">
                                Filter <i class="ri-drag-move-line"></i>
                            </a>
                            <div x-show="open" class="bg-white position-absolute rounded-3 p-3 border border-3 mt-3 col-md-6" style="right: 1rem; width: 55%;">
                                <div class="container">
                                    <div class="d-flex border-bottom border-2 mb-3">
                                        <span class="fw-bold text-secondary fs-5 mb-2">Filter</span>
                                    </div>
                                    <div class="row border-bottom border-2">
                                        <div class="col-12 col-sm-12 col-md-3 mb-3">
                                            <span class="fw-bold text-secondary">Status Penduduk</span>
                                            <div class="d-block mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Tetap
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Tidak Tetap
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 mb-3">
                                            <span class="fw-bold text-secondary">Status Keberadaan</span>
                                            <div class="d-block mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Hidup
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Meninggal
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Pindah
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Hilang
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Pergi
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Tidak Diketahui
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 mb-3">
                                            <span class="fw-bold text-secondary">Jenis Kelamin</span>
                                            <div class="d-block mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Laki-laki
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 mb-3">
                                            <span class="fw-bold text-secondary">Dusun</span>
                                            <div class="d-block mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Grendeng
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Kalicupak
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Sumampir
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                      Pandak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gap-2 mt-3">
                                        <a href="" class="btn btn-primary">Terapkan Filter</a>
                                        <a href="" class="btn btn-outline-secondary">Reset Filter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aksi">
                            <button class="btn btn-filter" data-bs-toggle="dropdown"><i class="ri-align-justify"></i></button>

                            <div class="dropdown-menu dropdown-menu-end border border-3 rounded mt-3">
                                <a href="#" class="dropdown-item">
                                    <i class="ri-printer-fill"></i>
                                    <span>Cetak</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ri-export-fill"></i>
                                    <span>Export data penduduk</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ri-file-excel-2-fill"></i>
                                    <span>Import data penduduk Exel</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ri-file-pdf-2-fill"></i>
                                    <span>Import data penduduk PDF</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ri-delete-bin-5-fill"></i>
                                    <span>Hapus</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-content table-responsive mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <td class="col text-secondary">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                No
                            </td>
                            <td class="col text-secondary">Nama</td>
                            <td class="col text-secondary">NIK</td>
                            <td class="col text-secondary">Dusun</td>
                            <td class="col text-secondary">RT</td>
                            <td class="col text-secondary">RW</td>
                            <td class="col text-secondary">Umur</td>
                            <td class="col text-secondary">Pekerjaan</td>
                            <td class="col text-secondary">Status</td>
                            <td class="col text-secondary"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                1
                            </td>
                            <td class="align-middle">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/admin/img/vindra.jpeg') }}" class="rounded-circle" width="50px" alt="">
                                    <span class="">Vindra Arya Yulian</span>
                                </div>
                            </td>
                            <td class="align-middle">3302272507060001</td>
                            <td class="align-middle">Grendeng</td>
                            <td class="align-middle">02</td>
                            <td class="align-middle">01</td>
                            <td class="align-middle">17</td>
                            <td class="align-middle">Programmer</td>
                            <td class="align-middle">Belum Kawin</td>
                            <td class="align-middle">
                                <a href="{{ route('kependudukan-penduduk-detail') }}" class="fs-4"><i class="ri-id-card-fill"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                2
                            </td>
                            <td class="align-middle">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/admin/img/vindra.jpeg') }}" class="rounded-circle" width="50px" alt="">
                                    <span class="">Vindra Arya Yulian</span>
                                </div>
                            </td>
                            <td class="align-middle">3302272507060001</td>
                            <td class="align-middle">Grendeng</td>
                            <td class="align-middle">02</td>
                            <td class="align-middle">01</td>
                            <td class="align-middle">17</td>
                            <td class="align-middle">Programmer</td>
                            <td class="align-middle">Belum Kawin</td>
                            <td class="align-middle">
                                <a href="{{ route('kependudukan-penduduk-detail') }}" class="fs-4"><i class="ri-id-card-fill"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                3
                            </td>
                            <td class="align-middle">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/admin/img/vindra.jpeg') }}" class="rounded-circle" width="50px" alt="">
                                    <span class="">Vindra Arya Yulian</span>
                                </div>
                            </td>
                            <td class="align-middle">3302272507060001</td>
                            <td class="align-middle">Grendeng</td>
                            <td class="align-middle">02</td>
                            <td class="align-middle">01</td>
                            <td class="align-middle">17</td>
                            <td class="align-middle">Programmer</td>
                            <td class="align-middle">Belum Kawin</td>
                            <td class="align-middle">
                                <a href="{{ route('kependudukan-penduduk-detail') }}" class="fs-4"><i class="ri-id-card-fill"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                4
                            </td>
                            <td class="align-middle">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/admin/img/vindra.jpeg') }}" class="rounded-circle" width="50px" alt="">
                                    <span class="">Vindra Arya Yulian</span>
                                </div>
                            </td>
                            <td class="align-middle">3302272507060001</td>
                            <td class="align-middle">Grendeng</td>
                            <td class="align-middle">02</td>
                            <td class="align-middle">01</td>
                            <td class="align-middle">17</td>
                            <td class="align-middle">Programmer</td>
                            <td class="align-middle">Belum Kawin</td>
                            <td class="align-middle">
                                <a href="{{ route('kependudukan-penduduk-detail') }}" class="fs-4"><i class="ri-id-card-fill"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                5
                            </td>
                            <td class="align-middle">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/admin/img/vindra.jpeg') }}" class="rounded-circle" width="50px" alt="">
                                    <span class="">Vindra Arya Yulian</span>
                                </div>
                            </td>
                            <td class="align-middle">3302272507060001</td>
                            <td class="align-middle">Grendeng</td>
                            <td class="align-middle">02</td>
                            <td class="align-middle">01</td>
                            <td class="align-middle">17</td>
                            <td class="align-middle">Programmer</td>
                            <td class="align-middle">Belum Kawin</td>
                            <td class="align-middle">
                                <a href="{{ route('kependudukan-penduduk-detail') }}" class="fs-4"><i class="ri-id-card-fill"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                6
                            </td>
                            <td class="align-middle">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('assets/admin/img/vindra.jpeg') }}" class="rounded-circle" width="50px" alt="">
                                    <span class="">Vindra Arya Yulian</span>
                                </div>
                            </td>
                            <td class="align-middle">3302272507060001</td>
                            <td class="align-middle">Grendeng</td>
                            <td class="align-middle">02</td>
                            <td class="align-middle">01</td>
                            <td class="align-middle">17</td>
                            <td class="align-middle">Programmer</td>
                            <td class="align-middle">Belum Kawin</td>
                            <td class="align-middle">
                                <a href="{{ route('kependudukan-penduduk-detail') }}" class="fs-4"><i class="ri-id-card-fill"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center gap-1">
                        <span>Tampilkan</span>
                        <div class="">
                            <select id="inputState" class="form-select">
                                <option selected>10</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                        <span>data</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <a href="" class="btn fs-4"><i class="ri-arrow-left-s-fill"></i></a>
                        <div class="d-flex align-items-center gap-1 border-end border-start p-1">
                            <span>Halaman</span>
                            <div class="" style="width: 50px">
                                <input type="text" class="form-control" placeholder="4" disabled>
                            </div>
                            <span>dari 94</span>
                        </div>
                        <a href="" class="btn fs-4"><i class="ri-arrow-right-s-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
