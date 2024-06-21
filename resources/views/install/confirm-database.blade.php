@extends('install.index')

@section('content')
<div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card" style="width: 100%">
        <h4 class="mx-auto m-3">Pemasangan Siska</h4>
        <span class="mx-auto" style="border-bottom: 1px solid grey; width: 100%"></span>

        <div class="config p-2">
            <div class="alert alert-success" role="alert">
                Koneksi Database berhasil
            </div>

            <p class="">Instalasi database dan pemuatan semua data dasar aplikasi akan dilakukan.</p>
            <p class="">Ini mungkin akan memakan waktu cukup lama, harap tunggu dan jangan tutup halaman ini.</p>

            <div class="d-flex justify-content-end p-2">
                <a href="{{ route('config-database') }}" class=""><button type="button" class="btn btn-primary">Langkah berikutnya -></button></a>
            </div>
        </div>
    </div>
</div>
@endsection
