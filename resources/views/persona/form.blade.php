<h1>{{$modo}} Persona</h1>
<br>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif
<div class="form-group">
    <label for="nombre"> Nombre </label>
    <input type="text" class="form-control" name="nombre" value="{{ isset($persona->nombre)?$persona->nombre:old('nombre') }}" id="nombre">
</div>

<div class="form-group">
    <label for="apellido"> Apellido </label>
    <input type="text" class="form-control" name="apellido" value="{{ isset($persona->apellido)?$persona->apellido:old('apellido') }}" id="apellido">
</div>

<div class="form-group">
    <label for="dni"> DNI </label>
    <input type="text" class="form-control" name="dni" value="{{ isset($persona->dni)?$persona->dni:old('dni') }}" id="dni">
</div>

<input class="btn btn-success" type="submit" value="{{$modo}} Datos">
<a class="btn btn-primary" href="{{ url('persona/') }}">Regresar</a>