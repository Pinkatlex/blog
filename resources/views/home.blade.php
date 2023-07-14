@extends('layouts.plantilla')

@section('title','Inicio')

@section('content')
<div class="row justify-content-center align-items-center g-2">
    <div class="col-12">
        <h1>Bienvenido a esta su plataforma de cursos</h1>
        <div class="alert alert-info text-center" role="alert">
            ¡Revise los nuevos cursos que tenemos dispoinibles para usted!
            <br><br>
            <a class="btn btn-outline-primary" href="{{route('cursos.index')}}">Ver cursos</a>
        </div>
    </div>
</div>

@endsection
