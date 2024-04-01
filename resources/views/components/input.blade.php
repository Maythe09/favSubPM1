@props(['titulo','type','nombre'])

<div class="my-2">
<label for="">{{$titulo}}</label>
<input type={{$type}} name={{$nombre}} class="">
@error($nombre)
<p>{{$message}}</p>
@enderror
</div>
