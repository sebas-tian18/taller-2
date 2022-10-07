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
        <form action="{{ route('mostrar') }}" method ='GET'>
            @foreach ($chk as $c)
                <label><input type="checkbox" name='Check2[]' value='{{$c->Check}}'>{{$ta->Check}}</label>
            @endforeach
            <button>Comprobar</button>
        </form>
    </div>
</body>
</html>