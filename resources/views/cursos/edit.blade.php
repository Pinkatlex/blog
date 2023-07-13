@extends('layouts.plantilla')
@section('title','Cursos edit')
@section('content')
    <h1>Editar curso</h1> 
    <form action="{{route('cursos.update',$curso)}}" method="POST">
        @csrf
        @method('put')
        <label for="">Nombre
            <input type="text" name="name" value="{{old('name',$curso->name)}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>            
        @enderror
        <br>
        <label for="">Descripción
            <textarea name="descripcion" id="" cols="20" rows="3">{{old('descripcion',$curso->descripcion)}}</textarea>
        </label>
        <br>
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>            
        @enderror
        <label for="">Categoria
            <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
        </label>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>            
        @enderror
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
