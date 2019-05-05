@include('components.header')
@include('components.footer')
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <head lang="{{ app()->getLocale() }}">
        <link rel="stylesheet" href={{ asset('bootstrap/css/bootstrap.css') }}>
        <link rel="stylesheet" href={{ asset('bootstrap/css/bootstrap-grid.css') }}>
        <link rel="stylesheet" href={{ asset('bootstrap/css/bootstrap-reboot.css') }}>
        <link rel="stylesheet" href={{ asset('bootstrap/css/style.css') }}>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <title>Innova Transport Pro</title>
    </head>


<body >

@yield('header1')

<div class="container-fluid"  style="background-image: url({{ asset('bootstrap/Images/fondo.jpg') }})">
<!--<img src="{{asset('bootstrap/Images/fondo.jpg')}}" width="100%" height="120%">-->
    <div class="row">
    <div class="col-1 col-sm-2 col-md-4 col-lg-5 col-xl-7"></div>
    <div class="col-10 col-sm-8 col-md-5 col-lg-4 col-xl-3" id="FormLog">

            <h2>Ingresar</h2>
        <br><br>
        <form class="form-horizontal" method="POST"  action="{{ route('login') }}" >
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="col-md-12">
                    <input id="email" type="text"  name="username" class="form-control font-weight-bold" value="{{ old('email') }}" required autofocus placeholder="Usuario">
                    @if ($errors->has('email'))
                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div><br>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                <div class="col-md-12">

                    <input id="password" type="password" name="password" class="form-control font-weight-bold" required placeholder="Contraseña">

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <input type="hidden" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <!--<input type="hidden" name="Status" value="1">
            <input type="hidden" name="Type" value="1">-->

                <br>

            <div class="form-group">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-danger">
                        Iniciar sesión
                    </button>
                    <br><br>
                 <a class="btn btn-link" id="register" href="{{ route('register') }}">
                     <b>¿Aún no estas registrado?</b>
                                </a>
                </div>
            </div>
            </div>
        </form>

    </div>
</div>
</div>

<div class="row">
    @yield('footer')
</div>
</body>
</html>