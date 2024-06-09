<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    
    <!-- @if($name != "")
    {{"Name is not emptyyy"}}

    @else
    {{"Name is emptyyy"}}
    @endif -->
    <!-- @unless($name == "ushna")
    {{"Name is not ushna"}}
    @endunless -->
    <!-- @isset($name)
    {{$name}}
    @endisset -->



    <!-- @for($i=1; $i<20; $i++ )
    <h2>
    {{$i}}
</h2>
@endfor -->




<!-- @php 
$i = 1;
@endphp
@while($i < 5)
<h2>  {{$i}}</h2>
@php $i++ @endphp
@endwhile -->

@php
$arr = [1 , 2,3,4,5,6,7,8,9];
@endphp
<select name="" id="">
@foreach ($arr as $i)
<option >{{$i}}</option>

@endforeach
</select>
</body>
</html>