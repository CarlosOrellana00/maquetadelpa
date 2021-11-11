@extends('keke.app')
@section('content')
<nav class="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Clientes</a></li>
    <li class="breadcrumb-item"><a href="">Crear Cliente</a></li>
  </ol>
</nav>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Crear Cliente</h2><br />
    </div>
    <div class="card-body">
      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-2 mb-3">
            <label for="validationCustom01">Nombre/Razón Social</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationCustom01">Nombre Comercial</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationCustom01">Identificador</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="validationCustom01">Web</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
          <div class="col-md-2 mb-3">
            <label for="ccmonth">Tipo Cliente</label>
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
            </select>
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
            <label for="validationCustom01">Email</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
        </div>
        <div class="form-row">
          <div>
            <img src="{{ asset('img/extra/mapa.png') }}" hight="400" width="400" class="rounded float-left" alt="...">
          </div>
          <div class="col-md-3 mb-3">
            <label for="validationCustom01">Referencia</label>
            <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Oficina #1018"
              required>
          </div>
        </div>
        <div>
          <button class="btn btn-primary" type="submit">Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection