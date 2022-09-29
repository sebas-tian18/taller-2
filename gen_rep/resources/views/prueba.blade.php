
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('mostrar') }}" method ='GET'>
        @csrf
            <label for="persona">Persona</label>
            <select name="persona1" id="persona1">
                <option value=""></option>
                <option value='id_persona'>ID</option>
                <option value='nombre'>Nombre</option>
                <option value="apellido">Apellido</option>
                <option value="fecha_nac">Fecha Nacimiento</option>
                <option value="cedula_ident">Cedula de Identidad</option>
                <option value="direccion">Direccion</option>
                <option value="FK_id_sexo">Sexo</option>
            </select>

            <label for="Persona2">Persona</label>
            <select name="persona2" id="persona2">
                <option value=""></option>
                <option value="id_persona">ID</option>
                <option value="nombre">Nombre</option>
                <option value="apellido">Apellido</option>
                <option value="fecha_nac">Fecha Nacimiento</option>
                <option value="cedula_ident">Cedula de Identidad</option>
                <option value="direccion">Direccion</option>
                <option value="FK_id_sexo">Sexo</option>
            </select>
            <button>Enviar</button>
    </form>
</body>
</html>