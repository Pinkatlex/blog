@extends('layouts.plantilla')
@section('title','Curso'.$curso->name)
@section('content')
    <h1>bienvenido al Show {{$curso->name}}</h1> 
    <p><strong>Categoria: {{$curso->categoria}}</strong></p>
    <p>{{$curso->descripcion}}</p>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit',$curso)}}">Editar curso</a>

    <form action="{{route('cursos.destroy',$curso)}}" method="POST">
        @csrf
        @method('delete') 
        <button type="submit">Eliminar</button>
    </form>
@endsection
