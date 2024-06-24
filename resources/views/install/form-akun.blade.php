@extends('install.index')

@section('content')
<div class="container d-flex align-items-center justify-content-center mt-5 mb-5">
    <div class="card" style="width: 100%">
        <h4 class="mx-auto m-3">Selamat Datang Sobat Siska</h4>
        <span class="mx-auto" style="border-bottom: 1px solid grey; width: 100%"></span>

        <div class="config p-2">
            <p class="">Dibawah ini Anda harus melakukan pengaturan default pengguna</p>
            <form action="{{ route('create-acc') }}" class="needs-validation" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label fw-bold" style="font-size: 0.9rem">Username Pengguna</label>
                    <input type="text" name="name" class="form-control form-control-sm" id="username" placeholder="Masukan Username" required value="{{ old('name') }}">
                    <div class="invalid-feedback">
                        Username tidak boleh kosong.
                    </div>
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Email" class="form-label fw-bold" style="font-size: 0.9rem">Email Pengguna</label>
                    <input type="email" name="email" class="form-control form-control-sm" id="Email" placeholder="Masukan Email" required value="{{ old('email') }}">
                    <div class="invalid-feedback">
                        Email tidak boleh kosong.
                    </div>
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold" style="font-size: 0.9rem">Password pengguna</label>
                    <input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="**********" required>
                    <div class="invalid-feedback">
                        Password tidak boleh kosong.
                    </div>
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label fw-bold" style="font-size: 0.9rem">Konfirmasi Password pengguna</label>
                    <input type="password" name="password_confirmation" class="form-control form-control-sm" id="confirmPassword" placeholder="**********" required>
                    <div class="invalid-feedback" id="confirmPasswordFeedback">
                        Password konfirmasi tidak sesuai.
                    </div>
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkbox" onclick="hidePassword();">
                    <label class="form-check-label" for="checkbox">
                      Lihat Password
                    </label>
                </div>
                <div class="d-flex justify-content-end p-2">
                    <button type="submit" class="btn btn-primary">Langkah berikutnya -></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('assets/admin/dist/js/install/main.js') }}"></script>
@endsection
