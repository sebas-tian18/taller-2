<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <div id="ABC">
            <form action="{{ route('p3') }}" method ='GET'>
                @foreach ($tab_per as $co)
                    <label><input type="checkbox" name='chk[]' value='{{$co->COLUMN_NAME}}'>{{$co->COLUMN_NAME}}</label></br>
                @endforeach
                <button>Comprobare</button>
            </form>
        </div>
    </body>
</html>
<!-- 
<div class="flex justify-between">
        <div>

        </div>
        <div class="mr-2">
            <input type="checkbox" class="mr-2 leading-tinght" name="" wire:model="active"/> primer check
        </div>
    </div> -->