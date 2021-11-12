@extends('layouts.app')
@section('content')
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Mantenedores</a></li>
  </ol>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Mantenedores</h2><br />
    </div>

    <div class="card-body">
      <div class="container-fluid">

        <div class="form-row">
          <div class="col-md-2 ">
            <button class="btn btn-secundary pull-right" type="button" disable>Adinistracion de Sistema</button>
          </div>
          <div>
            <ul class="list-unstyled">
              <li><i class="nav-icon fa fa-arrow-right"></i>Paises<i class="nav-icon fa fa-check"></i></li>
              <li><i class="nav-icon fa fa-arrow-right"></i>Monedas<i class="nav-icon fa fa-check"></i></li>
              <li><i class="nav-icon fa fa-arrow-right"></i>Metodos de Pago<i class="nav-icon fa fa-check"></i></li>
              <li><i class="nav-icon fa fa-arrow-right"></i>Terminos y Condiciones<i class="nav-icon fa fa-check"></i></li>
              <li><i class="nav-icon fa fa-arrow-right"></i>Servicios Delpa<i class="nav-icon fa fa-check"></i></li>
              <li><i class="nav-icon fa fa-arrow-right"></i>Adm Documentos</li>
              <li><i class="nav-icon fa fa-arrow-right"></i>Coordinaciones</li>
              <li><i class="nav-icon fa fa-arrow-right"></i>Categoria Proveedores</li>
              <li><i class="nav-icon fa fa-arrow-right"></i>Autorización Cliente Ultima Milla</li>
              <li><i class="nav-icon fa fa-arrow-right"></i>Adminsitración Chatbot</li>
            </ul>
          </div>

          <div class="form-row">
            <div class="col-md-5">
              <button class="btn btn-secundary pull-right" type="button" disable>Adinistracion Tarifas</button>
            </div>
            <div>
              <ul class="list-unstyled">
                <li><i class="nav-icon fa fa-arrow-right"></i>Imagenes LCL<i class="nav-icon fa fa-check"></i></li>
                <li><i class="nav-icon fa fa-arrow-right"></i>Recargos<i class="nav-icon fa fa-check"></i></li>
                <li><i class="nav-icon fa fa-arrow-right"></i>Commodittie<i class="nav-icon fa fa-check"></i></li>
                <li><i class="nav-icon fa fa-arrow-right"></i>Tipo de Carga<i class="nav-icon fa fa-check"></i></li>
                <li><i class="nav-icon fa fa-arrow-right"></i>Clasificación Tipo de Carga<i class="nav-icon fa fa-check"></i></li>
              </ul>
            <div>
          </div>
      </div>

      <div class="container-fluid">
        <div class="form-row">
            <div class="col-md-5">
              <button class="btn btn-secundary pull-right" type="button" disable>Perfilamiento</button>
            </div>
            <div>
              <ul class="list-unstyled">
                <li><i class="nav-icon fa fa-arrow-right"></i>Usuarios<i class="nav-icon fa fa-check"></i></li>
                <li><i class="nav-icon fa fa-arrow-right"></i>Redes<i class="nav-icon fa fa-check"></i></li>
                <li><i class="nav-icon fa fa-arrow-right"></i>Perfiles<i class="nav-icon fa fa-check"></i></li>
              </ul>
            <div>
          </div>
      </div>

    </div>
  </div>
</div>
@endsection