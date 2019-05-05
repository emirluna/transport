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
    <link href="dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard/css/simple-sidebar.css" rel="stylesheet">

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

        <h1 style="margin-top: 50px; margin-bottom: 100px;">Usuarios</h1>

        <div class="row text-left">
        <a href="{{route('users.create')}}" style="color: #fff;"><button class="btn text-left btn-danger">Nuevo usuario</button></a>
        </div>

        <table class="table" style="margin-top: 50px;" >

            <tr style="border-top: none;">
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Tipo</th>
                <th>Opciones</th>
            </tr>

            @foreach($users as $user)
                @if($user->Enterprise_id == Auth::user()->Enterprise_id && $user->id != Auth::user()->id)
                <tr>
                    <td>{{$user->Name}}</td>
                    <td>{{$user->LastName}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->roles()->first()->rol}}</td>
                    <td>
                        <a href="#"><img src="{{ asset('img/edit.png')}}" height="20px" width="20px"></a>
                        <a href="#"><img src="{{ asset('img/delete.png')}}" height="20px" width="20px"></a>
                    </td>
                </tr>
                @endif

            @endforeach
        </table>

    </div>
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