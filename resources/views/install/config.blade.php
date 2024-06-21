@extends('install.index')

@section('content')
<div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card">
        <h4 class="mx-auto m-3">Pemasangan Siska</h4>
        <span class="mx-auto" style="border-bottom: 1px solid grey; width: 100%"></span>

        <div class="config p-2">
            <p class="">Selamat datang di instalasi SiskaSID.</p>
            <p class="">Sebelum Memulai, Kami memerlukan beberapa informasi tentang database. Anda perlu mengetahui hal-hal berikut sebelum melanjutkan.</p>
            <ol>
                <li>Database Host</li>
                <li>Database Port</li>
                <li>Database Name</li>
                <li>Database Username</li>
                <li>Database Password</li>
            </ol>
            <p class="">Kemungkinan besar item ini akan Kepada anda tidak memiliki Informasi ini. Anda harus menghubungi mereka sebelum dapat melanjutkan.</p>
            <p class="">Instalasi akan memasukan informasi ini ke dalam file konfigurasi sehingga situs Anda dapat berkomunikasi dengan database Anda.</p>
            <p class="">Butuh lebih banyak bantuan? <span><a href="#">Kontak Bantuan.</a></span></p>

            <div class="d-flex justify-content-end p-2">
                <a href="{{ route('config-database') }}" class=""><button type="button" class="btn btn-primary">Langkah berikutnya -></button></a>
            </div>
        </div>
    </div>
</div>
@endsection
