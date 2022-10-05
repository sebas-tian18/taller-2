
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cargo/Dinamico</title>
</head>

<body>
<div class="container my-5">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 bg-darkgray">
            <div class = "card-body"> 
                <table class="table table-dark table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Cargo Laboral</th>
                        <th>Descripcion Cargo</th>
                        <th>Salario Mensual</th>
                    </thead>
                    <tbody>
                        @foreach($datos as $cargo)
                            <tr>
                            <td>{{$cargo->id_cargo}}</td>
                            <td>{{$cargo->cargo_laboral}}</td>
                            <td>{{$cargo->descripcion_cargo}}</td>
                            <td>{{$cargo->salario_mensual}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10">
    <form action="{{ route('A') }}" method="GET">
        @csrf
        <input type="checkbox" name="id_cargo" value="id_cargo" id='id_cargo'> ID <br/>
        <input type="checkbox" name="cargo_laboral" value="cargo_laboral" id="cargo_laboral"> Cargo Laboral <br/>
        <input type="checkbox" name="descripcion_cargo" value="descripcion_cargo" id="descripcion_cargo"> Descripcion Cargo <br/>
        <input type="checkbox" name="salario_mensual" value="salario_mensual" id="salario_mensual"> Salario Mensual <br/>
        <button type="submit">Submit</button><br/>
    </form>
</div>
</div>
    
</body>

</html>