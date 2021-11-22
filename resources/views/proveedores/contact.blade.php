@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('proveedores.contact')}}">Contacto</a></li>
</ol>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Nuevo Contacto</h2><br/>
    </div>
    <div class="card-body">
      <form class="needs-validation" novalidate>
        <div class="container-first">
          <div class="row mb-3">
            <div class="col-6">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom01">Nombre</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom01">Apellido</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom01">Numero de Identificación</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="validationCustom01">Telefono de Contacto</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required>
                  </div>
                </div>

                <div class="col-md-6">
                <div class="form-group">
                  <label for="validationCustom01">Correo Eléctronico</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label for="ccmonth">País</label>
                  <select class="form-control" id="ccmonth">
                    <option>Chile</option>
                    <option>Brasil</option>
                    <option>Argneitna</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="validationCustom01">Dirección</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
              </div>

              </div>
            </div>

            <div class="col-6">
              <div class="row">
                <div class="group">
                  <img src="{{ asset('img/extra/mapa.png') }}" hight="600" width="550" class="rounded float-left" alt="...">
                </div>
              </div>
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