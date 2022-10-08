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
            @foreach($var as $c)
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{$c}}" aria-expanded="true" aria-controls="collapseOne">
                    {{ $c }}
                </button>
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
            <!-- <button>Comprobar</button> -->
        </form>
    </div>
</body>
</html>
