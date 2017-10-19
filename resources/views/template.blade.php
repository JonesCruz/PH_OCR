<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- bibliotecas -->
    <script type="text/javascript" src="{{ asset('node_modules/dropify/dist/js/dropify.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('node_modules/dropify/dist/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/dropify/dist/css/dropify.min.css') }}">

    <!-- modulos -->
    <script type="text/javascript" src="{{ asset('js/conversao_ocr.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/conversao_ocr.css') }}">

</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top navbar-background">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 logo-ateneu">
                <!-- <img src="{{ asset('imagens/logo-ateneu.png') }}" class=""> -->
            </div>
        </div>
    </div>
</nav>
<!-- fim-navbar -->

<!-- conteudo -->
<div class="container foo">
    @yield('content')
</div>
<!-- fim-conteudo -->

<!-- rodapé -->
<footer class="container-fluid bg-4 navbar-fixed-bottom text-center">
    <p>Desenvolvido por:</p>
    <strong>Dário Santos</strong><br>
    <strong>Jones Bob</strong>
</footer>
<!-- fim-rodapé -->
</body>

@yield('javascript')

</html>
