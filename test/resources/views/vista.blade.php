

<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8″ />
    <title>test</title>
</head>
    <body>
        <div class = "card-body">
            <table class = "table">
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
    </body>
</html>