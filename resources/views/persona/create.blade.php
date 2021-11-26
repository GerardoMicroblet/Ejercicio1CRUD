@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{ url('/persona') }}" method="post">
        @csrf
        @include('persona.form',['modo'=>'Crear'])


    </form>
</div>
@endsection