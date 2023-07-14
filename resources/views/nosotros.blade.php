@extends('layouts.plantilla')

@section('title','Nosotros')

@section('content')
    <h1>Nosotros</h1>
    
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-3 justify-content-center align-items-center text-center">
            <div class="card" style="width: 12rem;">
                <img src="https://simosa.tech/packages/images/RLAAPNG.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Alan Alexis Ramos López</h5>
                  <p class="card-text text-justify">No hay problema que no tenga solución y si no la tiene entonces no es problema.</p>
                  <a target="_blank" href="https://www.linkedin.com/in/aarl" class="btn btn-outline-info">Linkedin</a>
                </div>
              </div>
        </div>
        <div class="col-9">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-12">
                    <div class="alert alert-dark fs-4 fw-bolder" role="alert">
                        Otros proyectos
                      </div>
                    <table class="table table-striped">
                          <tbody>
                            <tr>
                              <th scope="row">
                                <img src="https://simosa.tech/packages/images/afac_logo.png"  style="height:10rem; width:10rem"  alt="AFAC">
                              </th>
                              <td>
                                <p class="fs-4 ">Sistema Modular de Seguridad Aérea </p> 
                                <p class="fs-5">AGENCIA FEDERAL DE AVIACIÓN CIVIL</p>  
                                <a name="" id="" class="btn btn-outline-dark" href="https://www.gob.mx/afac" target="_blank" role="button">AFAC</a>                               
                            </tr>
                            <tr>
                                <th scope="row">
                                  <img src="https://2.bp.blogspot.com/_ze6_hAUoTCo/S8TeFn61AHI/AAAAAAAAACo/V1bFVjawKc0/s1600/DGAC.jpg" style="height:10rem" class="img-fluid "  alt="AFAC">
                                </th>
                                <td>
                                  <p class="fs-4 ">Cuestionario de identificación de factores de riesgo en viajeros </p> 
                                  <p class="fs-5">DIRECCIÓN GENERAL DE AERONÁUTICA CIVIL</p>
                                  <a name="" id="" class="btn btn-outline-dark" href="https://ts.sct.gob.mx/transporte-y-medicina-preventiva/aeronautica-civil/inicio/" target="_blank" role="button">DGAC</a>     
                                  
                                </td>
                              </tr>
                        </tbody>   
                    </table>
                </div>
                
            </div>
        </div>
        <div class="col-12 m-5"><a class="btn btn-outline-primary" href="{{route('cursos.index')}}">Volver a cursos</a></div>
    </div>
@endsection

