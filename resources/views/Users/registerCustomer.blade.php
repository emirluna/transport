@include('components.menuDash')
        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Innova Transport Pro</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('dashboard/css/simple-sidebar.css')}}" rel="stylesheet">

</head>


<body>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->

    @yield('MenuD')


    <div class="container text-center">

        <h2 style="margin-top: 50px;   ">Registro de clientes</h2>
        <form id="formReg" class="form-inline" method="POST" action="{{ route('customer.store') }}">
            {{ csrf_field() }}
            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="name" class="col-sm-12 col-form-label">Nombre</label>
                    <div class="col-sm-12">
                        <input id="name" type="text" class="form-control" name="Name" value="{{ old('name') }}" required autofocus>
                    </div>
                </div>
            </div>



            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="last_name" class="col-sm-12 col-form-label">Apellido</label>
                    <div class="col-sm-12">
                        <input id="last_name" type="text" class="form-control" name="LastName" value="{{ old('last_name') }}" required autofocus>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="phone" class="col-sm-12 col-form-label">Teléfono</label>
                    <div class="col-sm-12">
                        <input id="phone" type="number" class="form-control" name="Phone" value="{{ old('phone') }}" required autofocus>
                    </div>
                </div>
            </div>



            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="email" class="col-sm-12 col-form-label">Correo eléctronico</label>
                    <div class="col-sm-12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    </div>
                </div>

            </div>



            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="username" class="col-sm-12 col-form-label">Nombre de Usuario</label>
                    <div class="col-sm-12">
                        <input id="username" type="text" class="form-control" name="username" required>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="password" class="col-sm-12 col-form-label">Contraseña</label>
                    <div class="col-sm-12">
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-12 text-left"><br>
                <label class="col-sm-12 col-form-label">>Información adicional</label>
            </div>


            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="street" class="col-sm-12 col-form-label">Calle</label>
                    <div class="col-sm-12">
                        <input id="street" type="text" class="form-control" name="Street" required>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="number" class="col-sm-12 col-form-label">Número</label>
                    <div class="col-sm-12">
                        <input id="number" type="number" class="form-control" name="Number" required>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-12">
                <div class="form-group">
                    <label for="state" class="col-sm-12 col-form-label">Estado</label>
                    <div class="col-sm-12">
                        <select id="State" name="State" class="form-control" style="width: 75%">
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="Baja California Sur">Baja California Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua </option>
                            <option value="Ciudad de México">Ciudad de México </option>
                            <option value="Coahuila">Coahuila </option>
                            <option value="Colima">Colima </option>
                            <option value="Durango">Durango </option>
                            <option value="Guanajuato">Guanajuato </option>
                            <option value="Guerrero">Guerrero </option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="México">México</option>
                            <option value="Michoacán">Michoacán</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="Nuevo León">Nuevo León</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Querétaro">Querétaro</option>
                            <option value="Quintana Roo">Quintana Roo</option>
                            <option value="San Luis Potosí">San Luis Potosí</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatán">Yucatán</option>
                            <option value="Zacatecas">Zacatecas</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="city" class="col-sm-12 col-form-label">Ciudad</label>
                    <div class="col-sm-12">
                        <input id="city" type="text" class="form-control" name="City" required>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-6">
                <div class="form-group">
                    <label for="town" class="col-sm-12 col-form-label">Localidad</label>
                    <div class="col-sm-12">
                        <input id="town" type="text" class="form-control" name="Town" required>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-12 text-center">
                <div class="form-group">
                    <label for="zipcode" class="col-sm-12 col-form-label">Codigo Postal</label>
                    <div class="col-sm-12">
                        <input id="zipcode" type="number" class="form-control" name="ZipCode" required>
                    </div>
                </div>
            </div>


            <input type="hidden" name="Rol" value="Customer">

            <input type="hidden" name="Enterprise_id" value="{{ Auth::user()->Enterprise_id}}">

            <input type="hidden" name="Status" value="1">

            <input type="hidden" name="Country" value="México">

            <div class="col-sm-12"><br>
                <div class="form-group">
                    <div class="col-sm-12 col-lg-12">

                        <button type="submit" class="btn btn-danger">
                            Registrar
                        </button>
                    </div>

                </div>
            </div>
        </form>





    </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="dashboard/vendor/jquery/jquery.min.js"></script>
<script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>


</body>
</html>