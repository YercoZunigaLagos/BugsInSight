@extends('layouts.app')



@section('link')
<link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/favicon/manifest.json">
<link href="css/style.css" rel="stylesheet">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- Main styles for this application-->
<link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
<script src="https://kit.fontawesome.com/54992c826d.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<style>
.bg-light {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/assets/img/fondo-login.jpg');


}
#registrarse:hover{
    color: black !important;
    /* text-decoration: none; */
}
</style>
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h1 style="color:black !important">Inicia sesión</h1>
                                </div>
                                <div class="col-4">
                                    @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-right text-gray-700 underline"
                                        style="float:right;">Home</a>
                                    @endauth
                                </div>
                            </div>



                            <p class="text-muted">ingresa con tu cuenta</p>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </span></div>
                                    <input id="email" type="email" placeholder="Correo Electronico"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend"><span class="input-group-text">
                                            <i class="fas fa-lock"></i></span></div>
                                    <input id="password" type="password" placeholder="Contraseña"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row">

                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Ingresa') }}
                                        </button>
                                    </div>
                                    <div class="col-6 text-right">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste tu contraseña?') }}
                                        </a>
                                        @endif

                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Registrate</h2>
                                <p>Registrate como uno de nuestros usuarios para que pruebes las
                                    funcionalidades que ofrece nuestro sistema</p>
                                <a class="btn btn-lg btn-outline-light mt-3" id="registrarse" href="{{ route('register') }}">¡Quiero
                                    probarlo!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
@endsection
