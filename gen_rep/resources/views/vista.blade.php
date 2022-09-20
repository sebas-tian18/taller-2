

<!DOCTYPE html>
<html lang=”en”>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Generador de Reportes</title>
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
            <div class="container my-5">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 bg-darkgray">
                <div class = "card-body">
            
            <table class="table table-dark table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha Nacimiento</th>
                    <th>Cedula</th>
                    <th>Direccion</th>
                    <th>Sexo</th>
                </thead>
                <tbody>
                    @foreach($datos as $per)
                        <td>{{$per->id_persona}}</td>
                        <td>{{$per->nombre}}</td>
                        <td>{{$per->apellido}}</td>
                        <td>{{$per->fecha_nac}}</td>
                        <td>{{$per->cedula_ident}}</td>
                        <td>{{$per->direccion}}</td>
                        <td>{{$per->FK_id_sexo}}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

    </body>
</html>