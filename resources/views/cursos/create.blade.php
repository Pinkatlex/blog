@extends('layouts.plantilla')
@section('title','Cursos create')
@section('content')
    <h1>Aquí puedes crear un curso</h1> 
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label for="">Nombre
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>            
        @enderror
        <br>
        <label for="">Descripción
            <textarea name="descripcion" id="" cols="20" rows="3">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>            
        @enderror
        <br>
        <label for="">Categoria
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>            
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
