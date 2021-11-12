@extends('layouts.app')
@section('content')
<nav class="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('proveedores.index') }}">Proveedores</a></li>
    <li class="breadcrumb-item"><a href="{{ route('proveedores.create') }}">Crear Proveedor</a></li>
  </ol>
</nav>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Registro Empresa</h2><br />
    </div>
    <div class="card-body">
      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="validationCustom01">Identificador de Empresa</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationCustom01">Razon Social</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationCustom01">Nombre Comercial</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationCustom01">Web</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-3 mb-3">
            <label for="validationCustom01">Dirección</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationCustom01">Ciudad</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationCustom01">País</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationCustom01">Referencia</label>
            <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Oficina #1018"
              required>
          </div>
        </div>

        <div class="form-row">

          <div class="col-md-4">
            <p style="padding: 0 20px;">Persona</p>
            <ul>
               <li style="line-height: 15px; font-weight: bold;">
                <input class="form-check-input" type="radio" name="persoradio" id="persoradio1">
                <label class="form-check-label" for="flexRadioDefault2">
                  Juridica
                </label>
              </li>
              <li style="line-height: 15px; font-weight: bold;">
                <input class="form-check-input" type="radio" name="persoradio" id="persoradio2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Fisica
                </label>
              </li>
            </ul>
          </div>

          <div class="col-md-4">
            <p style="padding: 0 20px;">Cobertura</p>
            <ul>
               <li style="line-height: 15px; font-weight: bold;">
                <input class="form-check-input" type="radio" name="coberradio" id="coberradio1">
                <label class="form-check-label" for="flexRadioDefault2">
                  Nacional
                </label>
              </li>
              <li style="line-height: 15px; font-weight: bold;">
                <input class="form-check-input" type="radio" name="coberradio" id="coberradio2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Internacional
                </label>
              </li>
            </ul>
          </div>

          <div class="col-md-4 mb-4">
            <img src="{{ asset('img/extra/mapa.png') }}" hight="400" width="400" class="rounded float-left" alt="...">
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-4 mb-4">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Tipo Proveedor</span>
              <input type="text" class="form-control" placeholder="">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
            </div>
          </div>
        </div>

        <div class="pull-right">
          <button class="btn btn-primary" type="submit">Registrar</button>
          <button class="btn btn-primary" type="submit">Tipo Proveedor</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection