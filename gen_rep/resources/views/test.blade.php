<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="Rellenar">
        <form action="{{ route('test') }}" method ='GET'>
            @foreach ($tabla as $ta)
                <label><input type="checkbox" name='Check' id="relle" value='{{$ta->TABLE_NAME}}'>{{$ta->TABLE_NAME}}</label>
            @endforeach
            <button>Comprobar</button>
        </form>
    </div>
</body>
</html>