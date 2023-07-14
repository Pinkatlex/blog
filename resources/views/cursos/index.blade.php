@extends('layouts.plantilla')
@section('title','Cursos')
@section('content')
<div class="row justify-content-center align-items-center ">
    <div class="col-12 text-end alert alert-primary" role="alert" >
        <p>También puede registrar su propio curso aquí <a class="btn btn-primary btn-sm" href="{{route('cursos.create')}}">Crear curso</a></p> 
    </div>
    <div class="col-12">
        <h1>Cursos disponibles</h1> 
        <ul class="list-group list-group-flush">
            
            @foreach ($cursos as $curso)
            
                <li class="list-group-item">
                    <a href="{{route('cursos.show',$curso)}}">C{{$curso->id.".- ".$curso->name}}</a>    
                    <br>
    
                </li>        
            @endforeach    
        </ul>
        {{$cursos->links()}}
    </div>
</div>
@endsection
