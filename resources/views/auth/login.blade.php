```blade
@extends('layouts.app')

@section('title', 'Login SISFO')

@section('content')
<style>
    body {
        background: #eef3ff;
    }

    .login-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 35px 15px;
        background: linear-gradient(135deg, #edf3ff, #f8faff);
    }

    .login-card {
        width: 100%;
        max-width: 1050px;
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 45px rgba(31, 67, 130, 0.13);
    }

    .login-brand {
        height: 100%;
        min-height: 620px;
        padding: 55px 40px;
        color: #fff;
        background: linear-gradient(145deg, #174db8, #3977ed);
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .login-brand::before,
    .login-brand::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
    }

    .login-brand::before {
        width: 300px;
        height: 300px;
        top: -100px;
        right: -100px;
    }

    .login-brand::after {
        width: 250px;
        height: 250px;
        bottom: -100px;
        left: -90px;
    }

    .brand-content {
        position: relative;
        z-index: 1;
    }

    .brand-logo {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 25px;
    }

    .brand-logo i {
        font-size: 43px;
    }

    .brand-logo h2 {
        font-size: 25px;
        font-weight: 800;
        margin: 0;
        letter-spacing: 1px;
    }

    .brand-logo span {
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 2px;
    }

    .brand-description {
        font-size: 15px;
        line-height: 1.8;
        color: #e5edff;
        margin-bottom: 35px;
    }

    .brand-illustration {
        text-align: center;
        padding: 20px 0;
    }

    .brand-illustration i {
        font-size: 125px;
        color: rgba(255, 255, 255, 0.9);
    }

    .brand-footer {
        font-size: 12px;
        color: #dce7ff;
        margin-top: 30px;
    }

    .login-form-panel {
        padding: 55px 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .login-heading h1 {
        color: #18396f;
        font-size: 29px;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .login-heading p {
        color: #8292ad;
        font-size: 14px;
        margin-bottom: 28px;
    }

    .login-label {
        display: block;
        color: #435675;
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .login-input {
        height: 49px;
        border: 1px solid #d8e1f0;
        border-radius: 9px;
        padding: 10px 15px;
        font-size: 14px;
        box-shadow: none !important;
    }

    .login-input:focus {
        border-color: #3977ed;
    }

    .login-input.is-invalid {
        border-color: #dc3545;
    }

    .login-input-group {
        position: relative;
    }

    .login-input-group .input-icon {
        position: absolute;
        left: 15px;
        top: 16px;
        color: #8a9ab5;
        z-index: 2;
    }

    .login-input-group .login-input {
        padding-left: 43px;
    }

    .login-button {
        height: 50px;
        border: none;
        border-radius: 9px;
        background: linear-gradient(90deg, #2466e8, #397cf6);
        color: #fff;
        font-size: 15px;
        font-weight: 700;
        box-shadow: 0 7px 16px rgba(36, 102, 232, 0.2);
        transition: 0.2s;
    }

    .login-button:hover {
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(36, 102, 232, 0.25);
    }

    .login-links {
        margin-top: 25px;
        text-align: center;
    }

    .login-links a {
        color: #2466e8;
        font-size: 13px;
        text-decoration: none;
    }

    .login-links a:hover {
        text-decoration: underline;
    }

    .login-divider {
        display: flex;
        align-items: center;
        gap: 15px;
        margin: 22px 0;
        color: #8a9ab5;
        font-size: 12px;
    }

    .login-divider::before,
    .login-divider::after {
        content: "";
        flex: 1;
        height: 1px;
        background: #e0e7f2;
    }

    @media (max-width: 767.98px) {
        .login-wrapper {
            padding: 15px;
        }

        .login-brand {
            min-height: auto;
            padding: 30px 25px;
        }

        .brand-illustration {
            display: none;
        }

        .brand-description {
            margin-bottom: 0;
        }

        .brand-footer {
            margin-top: 15px;
        }

        .login-form-panel {
            padding: 35px 25px;
        }

        .login-heading h1 {
            font-size: 24px;
        }
    }
</style>

<div class="login-wrapper">
    <div class="login-card">
        <div class="row no-gutters">

            {{-- Panel informasi SISFO --}}
            <div class="col-md-5">
                <div class="login-brand">
                    <div class="brand-content">
                        <div class="brand-logo">
                            <i class="fas fa-graduation-cap"></i>
                            <div>
                                <h2>SISFO</h2>
                                <span>AKADEMIK</span>
                            </div>
                        </div>

                        <p class="brand-description">
                            Sistem Informasi Akademik Sekolah Terpadu
                            dan Terintegrasi untuk mendukung pengelolaan
                            data akademik secara mudah.
                        </p>

                        <div class="brand-illustration">
                            <i class="fas fa-laptop-house"></i>
                        </div>

                        <div class="brand-footer">
                            &copy; {{ date('Y') }} SISFO Akademik
                            <br>
                            Sistem Informasi Akademik Sekolah
                        </div>
                    </div>
                </div>
            </div>

            {{-- Form login --}}
            <div class="col-md-7">
                <div class="login-form-panel">

                    <div class="login-heading">
                        <h1>Selamat Datang Kembali!</h1>
                        <p>Masuk ke Sistem Informasi Akademik</p>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show small"
                             role="alert">
                            {{ session('status') }}

                            <button type="button" class="close"
                                    data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-4">
                            <label class="login-label" for="email">
                                Alamat Email
                            </label>

                            <div class="login-input-group">
                                <i class="fas fa-envelope input-icon"></i>

                                <input
                                    type="email"
                                    class="form-control login-input @error('email') is-invalid @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ old('email', 'admin@admin.com') }}"
                                    required
                                    autocomplete="email"
                                    autofocus
                                    placeholder="admin@admin.com"
                                >
                            </div>

                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label class="login-label" for="password">
                                Kata Sandi
                            </label>

                            <div class="login-input-group">
                                <i class="fas fa-lock input-icon"></i>

                                <input
                                    type="password"
                                    class="form-control login-input @error('password') is-invalid @enderror"
                                    id="password"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                    placeholder="Masukkan kata sandi"
                                >
                            </div>

                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <div class="custom-control custom-checkbox">
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="customCheck"
                                    name="remember"
                                    {{ old('remember') ? 'checked' : '' }}
                                >

                                <label class="custom-control-label"
                                       for="customCheck">
                                    Ingat Saya
                                </label>
                            </div>
                        </div>

                        <button type="submit"
                                class="btn btn-primary btn-block login-button">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            Masuk Sekarang
                        </button>
                    </form>

                    <div class="login-links">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                Lupa Kata Sandi?
                            </a>
                        @endif

                        @if (Route::has('register'))
                            <div class="login-divider">
                                atau
                            </div>

                            <a href="{{ route('register') }}">
                                Belum punya akun? Daftar Akun Baru!
                            </a>
                        @endif
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
```