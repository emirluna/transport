@include('components.menu')
@include('components.styles')
@include('components.scripts')
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Cuentas</title>

<head lang="{{ app()->getLocale() }}">
    @yield('style')

</head>
<body >
<div id="colorlib-page">
    <div class="container-wrap">
@yield('menu')

    <div id="colorlib-main">
        <section id="colorlib-hero" class="js-fullheight" data-section="home">
            <div class="flexslider js-fullheight">
                <!--<table style="color:black; margin: 0px;" class="table-bordered table text-center">
                    <tr>
                        <th colspan="2" style="text-align: center;">Datos de la cuenta</th>
                    </tr>
                    <tr>
                        <td>Id</td>
                        <td>{{ Auth::user()->id }}</td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Apellido</td>
                        <td>{{ Auth::user()->last_name }}</td>
                    </tr>
                    <tr>
                        <td>Teléfono</td>
                        <td>{{ Auth::user()->phone }}</td>
                    </tr>
                    <tr>
                        <td>Correo</td>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th colspan="2px" style="text-align: center;">
                            <button><a class="btn   " href="">
                                    Cambiar mis datos
                                </a></button>
                        </th>
                    </tr>

                </table>
-->

            </div>
        </section>
    </div>
</div>
    </div>
@yield('scripts')



</body>
</html>