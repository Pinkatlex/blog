@extends('layouts.plantilla')
@section('title','Cursos edit')
@section('content')
    <h1>Editar curso </h1> 
    <h3>C{{$curso->id.".- ".$curso->name}}</h3>
    <form action="{{route('cursos.update',$curso)}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label" for="">Nombre</label>
                <input class="form-control" type="text" name="name" value="{{old('name',$curso->name)}}">
            
            @error('name')
            <div class="alert alert-warning" role="alert">
                <small>*{{$message}}</small>  
              </div>
            @enderror
        </div>    
        
        <div class="mb-3">
            <label class="form-label" for="">Descripción</label>
                <textarea class="form-control" name="descripcion" id="" cols="20" rows="3">{{old('descripcion',$curso->descripcion)}}</textarea>
            
            <br>
            @error('descripcion')
            <div class="alert alert-warning" role="alert">
                <small>*{{$message}}</small>
              </div>
                     
            @enderror
        </div>    
        
        <div class="mb-3">
            <label  class="form-label" for="">Categoria</label>
                <input class="form-control" type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
            
            @error('categoria')
                <div class="alert alert-warning" role="alert">
                    <small>*{{$message}}</small>
                </div>
                
            @enderror
        </div>    
        
       
        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form>
@endsection
