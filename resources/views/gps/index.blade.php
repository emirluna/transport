@include('components.menu')
@include('components.styles')
@include('components.scripts')
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>GPS</title>
@yield('style')
</head>
<body>
<div id="colorlib-page">
    <div class="container-wrap">
        @yield('menu')
        <div id="colorlib-main">
            <section id="colorlib-hero" class="js-fullheight" data-section="home">
                <div class="flexslider js-fullheight">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Registrar GPS</div>

                                    <div class="panel-body">
                                        <form class="form-horizontal" method="POST" action="/gps">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('IpAddress') ? ' has-error' : '' }}">
                                                <label for="email" class="col-md-4 control-label">Dirección IP</label>

                                                <div class="col-md-6">
                                                    <input id="IpAddress" type="text" class="form-control" name="IpAddress" required autofocus>


                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('Status') ? ' has-error' : '' }}">
                                                <label for="password" class="col-md-4 control-label">Status</label>

                                                <div class="col-md-6">
                                                    <input id="Status" type="number" class="form-control" name="Status" required>


                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Registrar GPS
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<div class="col-md-6 col-lg-offset-3">
                <table class="table table-bordered" style="color: white;">

                    <tr>
                        <td>ID</td>
                        <td>Dirección Ip</td>
                        <td>Status</td>
                        <td>Operaciones</td>

                    </tr>

                    @foreach($gps as $gps)

                        <tr>

                            <td>{!! $gps->id !!}</td>
                            <td>{!! $gps->IpAddress !!}</td>
                            <td>{!! $gps->status !!}</td>
                            <td><a href="/gps/{!!$gps->id!!}/edit">Editar</a></td>

                            {{ Form::open(array('url' => 'gps/' . $gps->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            <td>{{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}</td>
                            {{ Form::close() }}
                        </tr>

                    @endforeach
                </table>

</div>

                </div>
            </section>
        </div>
    </div>
</div>
@yield('scripts')
</body>
</html>