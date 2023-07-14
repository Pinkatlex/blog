@extends('layouts.plantilla')
@section('title','C'.$curso->id.".- ".$curso->name)
@section('content')
<div class="row justify-content-center align-items-center g-2">
    <div class="col">
        <h1>Información del curso:</h1> 
        <h3>C{{$curso->id.".- ".$curso->name}}</h3>
        <p><strong>Categoria: {{$curso->categoria}}</strong></p>
        <p>{{$curso->descripcion}}</p>
        <br>
        <a class="btn btn-outline-primary" href="{{route('cursos.index')}}">Volver a cursos</a>
       
        <a class="btn btn-outline-warning" href="{{route('cursos.edit',$curso)}}">Editar curso</a>
    
        <form action="{{route('cursos.destroy',$curso)}}" method="POST" style="display: inline-block">
            @csrf
            @method('delete') 
            <button class="btn btn-outline-danger" type="submit">Eliminar</button>
        </form>
    </div>
</div>


@endsection
