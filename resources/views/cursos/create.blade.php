@extends('layouts.plantilla')
@section('title','Cursos create')
@section('content')
<div class="row justify-content-center align-items-center g-2">
    <div class="col-12">
        <h1>Aquí puedes crear un curso</h1>
    </div>
    <div class="col-md-6 col-sm-12">
        <form action="{{route('cursos.store')}}" method="POST">
            @csrf
            <label class="form-label" for="">Nombre</label>
                <input class="form-control"  type="text" name="name" value="{{old('name')}}">
            
                @error('name')
                <div class="alert alert-warning" role="alert">
                    <small>*{{$message}}</small>  
                  </div>
                @enderror
            
            <label class="form-label" for="">Descripción</label>
                <textarea class="form-control"  name="descripcion" id="" cols="20" rows="3">{{old('descripcion')}}</textarea>
            
                @error('descripcion')
                <div class="alert alert-warning" role="alert">
                    <small>*{{$message}}</small>
                  </div>
                         
                @enderror
           
            <label class="form-label"for="">Categoria </label>
                <input class="form-control"  type="text" name="categoria" value="{{old('categoria')}}">
           
                @error('categoria')
                <div class="alert alert-warning" role="alert">
                    <small>*{{$message}}</small>
                </div>
            @enderror
           <br>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
    <div class="col-md-6 col-sm-12"></div>
</div>
    
    
@endsection
