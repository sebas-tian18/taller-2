<!DOCTYPE html>
<html>
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
            <!-- Presentacion-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Bienvenidos a Hardsoft</h1>
                                <p class="lead fw-normal text-white-50 mb-4">La herramienta de ayuda para la facilitación a la hora de crear sus reportes orientada a cualquier usuario.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-success btn-lg px-4 me-sm-3" href="{{route('vista')}}">Generar tabla persona</a>
                                    <!-- <li><a href="{{route('filtro')}}" class="btn btn-sm btn-primary" >Filtro</a></li> -->
                                    <li><a href="{{route('prue')}}" class="btn btn-sm btn-primary" >Nombre y Cargos</a></li>
                                    <li><a href="{{route('prueba')}}" class="btn btn-sm btn-primary" >Consulta dinamica</a></li>
                                    <li><a href="{{route('excel')}}" class="btn btn-sm btn-primary" >Excel</a></li>
                                    <li><a href="{{route('expopdf')}}" class="btn btn-sm btn-primary" >PDF</a></li>
                                    <li><a href="{{route('json')}}" class="btn btn-sm btn-primary" >JSON</a></li>
                                    <li><a href="{{route('test')}}" class="btn btn-sm btn-primary" >Test</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img src="assets/A.jpg"/></div>
                    </div>
                </div>
            </header>
            <!-- Explicacion de formatos-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Formatos de archivos disponibles</h2>
                                <p class="lead fw-normal text-muted mb-5">Tenemos a nuestra disposición la exportación de los datos mediante 3 formatos dependiendo que elija nuestro usuario.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="assets/excel.png"/>
                                <div class="card-body p-4">
                                    <div class="badge bg-success bg-gradient rounded-pill mb-2">Excel</div>
                                    <p class="card-text mb-0">Excel es una herramienta muy eficaz para obtener información con significado a partir de grandes cantidades de datos. También funciona muy bien con cálculos sencillos y para realizar el seguimiento de casi cualquier tipo de información.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="assets/pdf.png"/>
                                <div class="card-body p-4">
                                    <div class="badge bg-danger bg-gradient rounded-pill mb-2">PDF</div>
                                    <p class="card-text mb-0">PDF es un formato de almacenamiento para documentos digitales independientes de plataformas de software o hardware. Este formato es de tipo compuesto.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="assets/json.png"/>
                                <div class="card-body p-4">
                                    <div class="badge bg-secondary bg-gradient rounded-pill mb-2">Json</div>
                                    <p class="card-text mb-0">JSON es un formato de texto sencillo para el intercambio de datos. Se trata de un subconjunto de la notación literal de objetos de JavaScript</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Call to action-->
                    <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">Suscribete para estar al tanto!</div>
                                <div class="text-white-50">Dejanos tu correo para nuevas actualizaciones en nuestra pagina</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="text" placeholder="Dirección de correo" aria-label="Dirección de correo" aria-describedby="button-newsletter" />
                                    <button class="btn btn-outline-light" id="button-newsletter" type="button">Agregar</button>
                                </div>
                                <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                            </div>
                        </div>
                    </aside>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2022</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
