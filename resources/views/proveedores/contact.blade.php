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
        <div class="row">

          <div class="col-md-4">
            <div class="form-group">
              <label for="validationCustom01">Nombre</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="validationCustom01">Apellido</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="validationCustom01">Numero de Identificación</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label for="ccmonth">Tipo de Contacto</label>
              <select class="form-control" id="ccmonth">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
             </div>
           </div>

           <div class="col-md-4">
            <div class="form-group">
              <label for="validationCustom01">Telefono de Contacto</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="validationCustom01">Correo Eléctronico</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
            </div>
          </div>


           <div class="col-4">
              <div class="form-group">
                <label for="ccmonth">País</label>
                <select class="form-control" id="ccmonth">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
              <label for="validationCustom01">Ciudad</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="validationCustom01">Dirección</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required>
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