@extends('layouts.login')
@section('title', 'Lupa Password')
@section('auth')
<div class="login-logo">
    <img src="{{ url('assets/img/absensi.png') }}" style="width: 100px" alt="">
    <br>
    <a href="{{ url('/') }}" style="color: antiquewhite">Absensi PT. Garuda Nusantara Construction</a>
</div>

<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Lupa Password</p>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                <div class="input-group-append">
                    <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                </div>
            </div>
            @error('email')
                <span class="text-danger small">{{ $message }}</span>
            @enderror

            <div class="row mt-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Kirim Link Reset</button>
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