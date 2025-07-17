@extends('layouts.login')
@section('auth')
<div class="login-logo">
    <img src="{{ url('assets/img/absensi.png') }}" style="width: 100px" alt="">
    <br>
    <a href="{{ url('/') }}" style="color: antiquewhite">Absensi PT. Garuda Nusantara Construction</a>
</div>

<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Reset Password Baru</p>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                <div class="input-group-append">
                    <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                </div>
            </div>
            @error('email')
                <span class="text-danger small">{{ $message }}</span>
            @enderror

            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password Baru" required>
                <div class="input-group-append">
                    <div class="input-group-text"><span class="fas fa-lock"></span></div>
                </div>
            </div>
            @error('password')
                <span class="text-danger small">{{ $message }}</span>
            @enderror

            <div class="input-group mb-3">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
                <div class="input-group-append">
                    <div class="input-group-text"><span class="fas fa-lock"></span></div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                </div>
            </div>
        </form>

        <br>
        <p class="mb-1">
            <a href="{{ url('/') }}">← Kembali ke Login</a>
        </p>
    </div>
</div>
@endsection