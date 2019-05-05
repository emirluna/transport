@include('components.menu')
@include('components.styles')
@include('components.scripts')
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Empresas</title>
@yield('style')
</head>
<body>
<div id="colorlib-page">
    <div class="container-wrap">
        @yield('menu')
        <div id="colorlib-main">
            <section id="colorlib-hero" class="js-fullheight" data-section="home">
                <div class="flexslider js-fullheight">
                    <a class="btn btn-primary" href="{{route('enterprise.create')}}">Registrar nueva empresa</a>
                    <div class="col-md-6 col-lg-offset-3">
                        <br><br>
                    </div>
                    <table class="table table-bordered" style="color: white;">

                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>Status</td>

                        </tr>

                        @foreach($vehicle as $vehicle)

                            <tr>

                                <td>{!! $vehicle->id !!}</td>
                                <td>{!! $vehicle->Name !!}</td>

                                <td>
                                    @if($vehicle->Status==1)
                                        Activo
                                    @else
                                        Inactivo
                                    @endif
                                </td>


                            </tr>

                        @endforeach
                    </table>

                </div>
            </section>
        </div>
    </div>
</div>
@yield('scripts')
</body>
</html>