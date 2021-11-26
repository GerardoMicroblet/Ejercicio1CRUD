@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{ url('/persona/'.$persona->id) }}" method="post">
        @csrf
        @method('PATCH')
        @include('persona.form',['modo'=>'Editar'])

    </form>
</div>
@endsection