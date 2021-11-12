@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ route('clientes.index')}}">Clientes</a></li>
  <li class="breadcrumb-item"><a href="{{ route('clientes.show')}}">Ficha Cliente</a></li>
</ol>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Ficha Cliente</h2><br />
    </div>
    <div class="card-body">
      <form class="needs-validation" novalidate>

        <div class="form-row">

          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Cliente</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>

          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Tipo Cliente</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>

          <div class="col-md-4 mb-3">

            <label for="validationCustom01">Credito Habilitado</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="creditradio" id="creditradio1">
              <label class="form-check-label" for="flexRadioDefault1">
                Si
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="creditradio" id="creditradio2">
              <label class="form-check-label" for="flexRadioDefault2">
                No
              </label>
            </div>
          </div>

        </div>

        <div class="form-row">

          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Habilitado para Compras</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="buyradio" id="buyradio1">
              <label class="form-check-label" for="flexRadioDefault1">
                Si
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="buyreadio" id="buyradiot2">
              <label class="form-check-label" for="flexRadioDefault2">
                No
              </label>
            </div>
          </div>

          <div class="col-md-4 mb-3">

            <label for="validationCustom01">Habilitado para Descuentos</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="descradio" id="descradio1">
              <label class="form-check-label" for="flexRadioDefault1">
                Si
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="descradio" id="descradio2">
              <label class="form-check-label" for="flexRadioDefault2">
                No
              </label>
            </div>
          </div>

        </div>

        <div class="form-row">

        </div>


      </form>
    </div>
  </div>
</div>
@endsection