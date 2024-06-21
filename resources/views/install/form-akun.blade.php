@extends('install.index')

@section('content')
<div class="container d-flex align-items-center justify-content-center mt-5 mb-5">
    <div class="card" style="width: 100%">
        <h4 class="mx-auto m-3">Pemasangan Siska</h4>
        <span class="mx-auto" style="border-bottom: 1px solid grey; width: 100%"></span>

        <div class="config p-2">
            <p class="">Dibawah ini Anda harus melakukan pengaturan default pengguna</p>
            <form action="">
                <div class="mb-3">
                    <label for="" class="form-label fw-bold" style="font-size: 0.9rem">Username Pengguna</label>
                    <input type="text" class="form-control form-control-sm" id="" placeholder="Masukan Username">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold" style="font-size: 0.9rem">Password pengguna</label>
                    <input type="password" class="form-control form-control-sm" id="password" placeholder="**********">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label fw-bold" style="font-size: 0.9rem">Konfirmasi Password pengguna</label>
                    <input type="password" class="form-control form-control-sm" id="confirmPassword" placeholder="**********">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkbox" onclick="hidePassword();">
                    <label class="form-check-label" for="checkbox">
                      Lihat Password
                    </label>
                </div>
            </form>

            <div class="d-flex justify-content-end p-2">
                <a href="{{ route('confirm-database') }}" class=""><button type="button" class="btn btn-primary">Langkah berikutnya -></button></a>
            </div>
        </div>
    </div>
</div>

<script>
    function hidePassword(){
        var x = document.getElementById('password')
        var y = document.getElementById('confirmPassword')
        if (x.type == 'password' && y.type == 'password') {
            x.type = 'text'
            y.type = 'text'
        } else {
            x.type = 'password'
            y.type = 'password'
        }
    }
</script>
@endsection
