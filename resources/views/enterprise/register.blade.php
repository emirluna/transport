@include('components.menu')
@include('components.styles')
@include('components.scripts')
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Inicio</title>

@yield('style')
</head>
<body>

<div id="colorlib-page">
    <div class="container-wrap">
        @yield('menu')
        <div id="colorlib-main">

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Formulario de registro</div>

                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="/enterprise">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('Name') ? ' has-error' : '' }}">
                                        <label for="Name" class="col-md-4 control-label">Nombre</label>

                                        <div class="col-md-6">
                                            <input id="Name" type="text" class="form-control" name="Name" required autofocus>

                                            @if ($errors->has('Name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('Name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <input type="hidden" name="AdminId" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="Status" value="1">


                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Registrar
                                            </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@yield('scripts')
</body>
</html>