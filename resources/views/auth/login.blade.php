<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel 10 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href='{{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}'
        type='text/css' media='all'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href='{{ url('plugins/fontawesome-free/css/all.min.css') }}' type='text/css' media='all'>
    {{-- <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css"> --}}

    <!-- icheck bootstrap -->
    <link rel="stylesheet" href='{{ url('icheck-bootstrap/icheck-bootstrap.min.css') }}' type='text/css' media='all'>
    {{-- <link rel="stylesheet" href="../public/icheck-bootstrap/icheck-bootstrap.min.css"> --}}

    <!-- Theme style -->
    <link rel="stylesheet" href='{{ url('dist/css/adminlte.min.css') }}' type='text/css' media='all'>
    {{-- <link rel="stylesheet" href="../public/dist/css/adminlte.min.css"> --}}
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ URL('/') }}"><b>Sistema de </b>ACCESO</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Ingresar al Sistema</p>

                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-12">
                                <label for="email">{{ __('Correo') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>

                            <div class="row mb-12">
                                <label for="password">{{ __('Contraseña') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="row mb-12">
                                    <div class="col-md-4 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordar') }}
                                            </label>
                                        </div>
                                    </div> 
                                </div> --}}
                            <hr>
                            <div class="row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Entrar') }}
                                    </button>


                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-12">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Olvidaste tu Contraseña?') }}
                                            </a>
                                        @endif

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="ml-4 font-semibold 
                                            text-gray-600 
                                            hover:text-gray-900 
                                            dark:text-gray-400 
                                            dark:hover:text-white 
                                            focus:outline 
                                            focus:outline-2 
                                            focus:rounded-sm 
                                            focus:outline-red-500">
                                                {{ __('Registrar nuevo') }}</a>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>



                {{-- <div class="social-auth-links text-center mb-3">
                    <p>- O -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Entrar usando Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Entrar usando Google+
                    </a>
                </div> --}}
                <!-- /.social-auth-links -->


            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/dist/js/adminlte.min.js"></script>
</body>

</html>
