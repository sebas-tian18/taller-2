<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tablas elegidas</title>        
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
</head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="welcome.blade.php">Hardsoft</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="welcome.blade.php">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tablas</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="tpersona.blade.php">Personas</a></li>
                                    <li><a class="dropdown-item" href="tsexo.blade.php">Sexo</a></li>
                                    <li><a class="dropdown-item" href="templeados.blade.php">Empleados</a></li>
                                    <li><a class="dropdown-item" href=".blade.php">Cargos</a></li>
                                    <li><a class="dropdown-item" href="">Sucursales</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">¿Cómo se usa?</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contactanos</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.google.com">Adios</a></li>
                            <li class="nav-item dropdown"></li>
                        </ul>
                    </div>
                </div>
            </nav>
<div id="Rellenar">
        <form action="{{ route('mostrar') }}" method ='GET'>
            @foreach($var as $c)
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <label>{{ $c }}</label>
                <!-- <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{$c}}" aria-expanded="true" aria-controls="collapseOne"> -->
                <!-- </button> -->
                </h2>
                <div id="{{$c}}" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    @foreach($arr as $data2)
                        @if($data2[0] == $c)
                            <input type="hidden" name="tabla" value="{{ $c }}">
                            <input type="checkbox" name="datos2[]" id="{{ $data2[1] }}" value="{{ $data2[1] }}"> <label>{{ $data2[1]  }}</label><br>
                        @endif
                    @endforeach
            @endforeach
            <button>Comprobar</button>
        </form>
    </div>
</body>
</html>
