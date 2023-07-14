@extends('layouts.plantilla')

@section('title','Contactanos')

@section('content')
    <h1>Déjanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="post">
        @csrf
        <label for="name">Nombre
            <br>
            <input type="text" name="name">
        </label>
        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <label for="correo">Correo
            <br>
            <input type="text" name="correo">
        </label>
        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <label for="mensaje">Mensaje
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
        
    @endif

@endsection

