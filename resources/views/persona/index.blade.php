@extends('layouts.app')

@section('content')
<div class="container">


    @if(Session::has('mensaje'))
    <div class="alert alert-success alert dismissible" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <table class="table table-light">

        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($personas as $persona)
            <tr>
                <td>{{$persona->id}}</td>
                <td>{{$persona->Nombre}}</td>
                <td>{{$persona->Apellido}}</td>
                <td>{{$persona->DNI}}</td>
                <td>
                    <a href="{{ url('/persona/'.$persona->id.'/edit') }}" class="btn btn-warning">
                        Editar
                    </a>

                    <form action="{{url('/persona/'.$persona->id )}}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('Seguro que queres borrar?')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    {!! $personas->links() !!}

    <a href="{{ url('persona/create') }}" class="btn btn-success">Agregar Nueva Persona</a>
</div>
@endsection