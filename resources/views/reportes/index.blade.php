@extends('layouts.app')
@section('content')
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Clientes</a></li>
  </ol>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Listado de Clientes</h2><br />
    </div>
    <div class="card-body">
      <form>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="ccmonth">Servicios</label>
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="ccmonth">Fecha Desde</label>
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="ccmonth">Fecha Hasta</label>
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          {{-- Grafico iria aqui --}}
        </div>
        <div class="form-row">
        </div>
      </form>
    </div>
  </div>
</div>
@endsection