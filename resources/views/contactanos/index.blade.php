@extends('layouts.plantilla')

@section('title','Contactanos')

@section('content')

<div class="row align-items-start g-2">
    <div class="col-12">
        <h1>Déjanos un mensaje</h1>
    </div>
    <div class="col-md-6 col-sm-12">
        <form action="{{route('contactanos.store')}}" method="post">
            @csrf
            <label class="form-label" for="name">Nombre
                <br>
                <input class="form-control" type="text" name="name" value="{{old('name')}}">
            </label>            
            @error('name')
            <div class="alert alert-warning" role="alert">
                <small>*{{$message}}</small>  
              </div>
            @enderror
            <br>
            <label class="form-label" for="correo">Correo
                <br>
                <input class="form-control" type="text" name="correo" value="{{old('correo')}}">
            </label>
            @error('correo')
            <div class="alert alert-warning" role="alert">
                <small>*{{$message}}</small>
              </div>
                     
            @enderror
            <br>
            <label class="form-label" for="mensaje">Mensaje
                <br>
                <textarea class="form-control" name="mensaje" rows="4">{{old('mensaje')}}</textarea>
            </label>
            @error('mensaje')
            <div class="alert alert-warning" role="alert">
                <small>*{{$message}}</small>
              </div>
                     
            @enderror
            <br>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form> 
        <br>
        <a class="btn btn-outline-primary " href="{{route('cursos.index')}}">Volver a cursos</a>
    </div>
    <div class="col-md-6 col-sm-12">
        @if (session('info'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">{{session('info')}}.</h4>
                <hr>
                <p class="mb-0">Estaremos en contacto contigo</p>
            </div>        
            <a class="btn btn-outline-primary" href="{{route('cursos.index')}}">Volver a cursos</a>
        @endif
    </div>
    <div class="col-12 m-4"></div>
</div>
    



    

@endsection

