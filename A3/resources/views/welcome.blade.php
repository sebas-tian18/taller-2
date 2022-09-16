<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generador de Reportes</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/app.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.youtube.com/watch?v=mCdA4bJAGGk">Hardsoft
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled">Disabled</a>
            </div>
        </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 bg-darkgray">
                <h4 class="my-4">Selecciona la consulta que deseas</h4>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Elige tus consultas</option>
                    <option value="1">Sucursales</option>
                    <option value="2">Empleados</option>
                    <option value="3">Cargos</option>
                </select>
                <div class="d-grid gap-2 my-3">
                    <button class="btn btn-success">Buscar</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7" style="background-image: var('../css/em.jpg');"> 
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>