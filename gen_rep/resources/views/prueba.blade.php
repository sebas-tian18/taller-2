<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8″ />
    <title>test</title>
</head>
    <body>
        <form action="{{ route('filtro') }}" method = "GET">
            <label for="Persona">Persona</label>
            <select name="Persona" id="Persona">

                <option value="id_persona">ID</option>
                <option value="nombre">Nombre</option>
                <option value="apellido">Apellido</option>
                <option value="fecha_nac">Fecha Nacimiento</option>
                <option value="cedula_ident">Cedula de Identidad</option>
                <option value="direccion">Direccion</option>
                <option value="FK_id_sexo">Sexo</option>
            </select>

            <label for="Persona2">Persona</label>
            <select name="Persona2" id="Persona2">

                <option value="id_persona">ID</option>
                <option value="nombre">Nombre</option>
                <option value="apellido">Apellido</option>
                <option value="fecha_nac">Fecha Nacimiento</option>
                <option value="cedula_ident">Cedula de Identidad</option>
                <option value="direccion">Direccion</option>
                <option value="FK_id_sexo">Sexo</option>
            </select>

            <input type="submit" value="Buscar">
        </form>
    </body>
</html>