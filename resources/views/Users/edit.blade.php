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
                                {{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT')) }}

                                <div class="form-group">
                                    {{ Form::label('ipaddress', 'Dirección Ip') }}
                                    {{ Form::text('IpAddress', null, array('class' => 'form-control')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('status', 'Status') }}
                                    {{ Form::number('status', null, array('class' => 'form-control')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('ipaddress', 'Dirección Ip') }}
                                    {{ Form::text('IpAddress', null, array('class' => 'form-control')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('status', 'Status') }}
                                    {{ Form::number('status', null, array('class' => 'form-control')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('ipaddress', 'Dirección Ip') }}
                                    {{ Form::text('IpAddress', null, array('class' => 'form-control')) }}
                                </div>

                                <div class="form-group">
                                    {{ Form::label('status', 'Status') }}
                                    {{ Form::number('status', null, array('class' => 'form-control')) }}
                                </div>




                                {{ Form::submit('Guardar Cambios', array('class' => 'btn btn-primary')) }}

                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@yield('scripts')
</body>
</html>