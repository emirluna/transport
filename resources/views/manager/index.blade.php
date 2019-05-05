@include('components.menu')
@include('components.styles')
@include('components.scripts')
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Gestor de Documental</title>
    @yield('style')
</head>
<body>

<div id="colorlib-page">
    <div class="container-wrap">
        @yield('menu')
        <div id="colorlib-main">
            <section id="colorlib-hero" class="js-fullheight" data-section="home">
                <div class="flexslider js-fullheight">
                </div>
            </section>
        </div>
    </div>
</div>
@yield('scripts')
</body>
</html>