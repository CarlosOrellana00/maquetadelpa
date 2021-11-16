@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ route('proveedores.config')}}">Configuración</a></li>
</ol>
<div class="container">
  <div class="card">
    <div class="card-header">
      <h2>Configuración</h2>
    </div>
    <div class="card-body">
      <form class="needs-validation" novalidate>

        <div class="row">

          <div class="col-4">
            <div class="card-header text-center">
              <h2>Perfil</h2>
            </div>


          </div>

          <div class="col-4">
            <div class="card-header text-center">
              <h2>Actividades</h2>
            </div>

          </div>

          <div class="col-4">
            <div class="card-header text-center">
              <h2>Configuraciones</h2>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <div class="row">
              <div class="card-header text-center">
                <h2>Web</h2>
              </div>

            </div>

            <div class="row">
              <div class="card-header text-center">
                <h2>Chat</h2>
              </div>

            </div>
          </div>

          <div class="col-8">
            <div class="card-header text-center">
                <h2>El Grafico</h2>
              </div>

          </div>
        </div>

      </div>
    </div>
  </div>






  {{-- ARRIBA --}}
  <div class="row">
    <div class="col-md-4 ">
      <h4>Perfil</h4>
      <div class="row">
         {{-- <div class="col-6">col-6 </div>
         <div class="col-6">col-6 1 </div> --}}
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Identificador</span>
          <input type="text" class="form-control" placeholder="" disabled>
          <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <h4>Actividades</h4>
      <p>Filtros de Actividades: Cotizaciones</p>
    </div>
    <div class="col-md-4">
      <h4>Configuraciones</h4>
      <div class="row">
        <div class="col-md-1">
          <button class="btn btn-primary pull-right" type="submit">Contactos</button>
          <button class="btn btn-primary pull-right" type="submit">Documentos</button>
          <button class="btn btn-primary pull-right" type="submit">Princing Tarifas</button>
          <button class="btn btn-primary pull-right" type="submit">Creditos</button>
          <button class="btn btn-primary pull-right" type="submit">Operaciones</button>
          <button class="btn btn-primary pull-right" type="submit">Facturación/Pagos</button>
          <button class="btn btn-primary pull-right" type="submit">Cotizaciones Respuestas Manuales</button>
          <button class="btn btn-primary pull-right" type="submit">TAG</button>
        </div>
      </div>
    </div>
  </div>
  {{-- ABAJO --}}
  <div class="row">
    <div class="col-md-6">
      <h4>1.1</h4>
    </div>
    <div class="col-md-6">
      <h4>1.2</h4>
    </div>
  </div>
</div>


@endsection