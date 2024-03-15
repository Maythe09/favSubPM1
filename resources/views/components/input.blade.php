@props(['titulo','type','nombre'])

<label for="">{{$titulo}}</label>
<input type={{$type}} name={{$nombre}} class="">
@error($nombre)
<p>{{$message}}</p>
@enderror
