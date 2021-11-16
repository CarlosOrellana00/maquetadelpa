@extends('layouts.app')
@section('content')
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ route('clientes.index')}}">Clientes</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{ route('clientes.create')}}">Crear Cliente</a>
    </li>
  </ol>
<div class="container-fluid">
  <div class="card">

    <div class="card-header">
      <h2>Crear Cliente</h2><br/>
    </div>

    <div class="card-body">
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-6">

            <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label for="validationCustom01">Nombre/Razón Social</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="validationCustom01">Nombre Comercial</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="validationCustom01">Identificador</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="validationCustom01">Email</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                <label for="validationCustom01">Web</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="ccmonth">Tipo Cliente</label>
                  <select class="form-control" id="ccmonth">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="validationCustom01">País</label>
                  {{-- <input type="text" class="form-control" id="validationCustom01" value="" required> --}}
                  <select class="form-control" id="ccmonth">
                    <option>Chile</option>
                    <option>Brasil</option>
                    <option>Argentina</option>
                  </select>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="validationCustom01">Ciudad</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="validationCustom01">Dirección</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <label for="validationCustom01">Referencia</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Oficina #1018" required>
                </div>
              </div>

            </div>
          </div>

          <div class="col-6">
            <div class="group">
              <img src="{{ asset('img/extra/mapa.png') }}" hight="600" width="550" class="rounded float-left" alt="...">
            </div>
          </div>

        </div>

        <div>
          <button class="btn btn-primary pull-right" type="submit">Registrar</button>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection