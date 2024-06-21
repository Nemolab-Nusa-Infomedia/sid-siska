@extends('install.index')

@section('content')
<div class="container d-flex align-items-center justify-content-center mt-5 mb-5">
    <div class="card" style="width: 100%">
        <h4 class="mx-auto m-3">Pemasangan Siska</h4>
        <span class="mx-auto" style="border-bottom: 1px solid grey; width: 100%"></span>

        <div class="config p-2">
            <p class="">Dibawah ini Anda harus memasukan rincian koneksi database Anda. Jika Anda tidak yakin dengan ini, hubungi penyedia hosting Anda.</p>
            <form action="">
                <div class="mb-3">
                    <label for="" class="form-label fw-bold" style="font-size: 0.9rem">Database Host</label>
                    <input type="text" class="form-control form-control-sm" id="" placeholder="Masukan Database Host" value="localhost">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold" style="font-size: 0.9rem">Database Port</label>
                    <input type="text" class="form-control form-control-sm" id="" placeholder="Masukan Database Port" value="3306">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold" style="font-size: 0.9rem">Database Name</label>
                    <input type="text" class="form-control form-control-sm" id="" placeholder="Masukan nama Database Anda">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold" style="font-size: 0.9rem">Database User</label>
                    <input type="text" class="form-control form-control-sm" id="" placeholder="Masukan Database User" value="root">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold" style="font-size: 0.9rem">Database Password</label>
                    <input type="text" class="form-control form-control-sm" id="" placeholder="Masukan Password Database Anda">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold" style="font-size: 0.9rem">Database Prefix</label>
                    <input type="text" class="form-control form-control-sm" id="" placeholder="Masukan Prefix Database Anda">
                </div>
            </form>

            <div class="d-flex justify-content-end p-2">
                <a href="{{ route('confirm-database') }}" class=""><button type="button" class="btn btn-primary">Langkah berikutnya -></button></a>
            </div>
        </div>
    </div>
</div>
@endsection
