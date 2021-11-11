@extends('keke.app')
@section('content')
<nav class="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Personalización de Sistema</a></li>
  </ol>
</nav>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Personalización de Sistema</h2><br />
    </div>
    <div class="card-body">
      <form>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Idioma Sistema</label>
          <div class="col-md-3 mb-3">
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Moneda Sistema</label>
          <div class="col-md-3 mb-3">
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">País</label>
          <div class="col-md-3 mb-3">
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Configuración Reginal</label>
          <div class="col-md-3 mb-3">
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-2 col-form-label" for="text-input">Nombre Empresa</label>
          <div class="col-md-3 mb-3">
            <input class="form-control" id="text-input" type="text" name="text-input" placeholder="">
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-2 col-form-label" for="file-input">Logo</label>
          <div class="col-md-9">
            <input id="file-input" type="file" name="file-input">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Adinistrar Colores</label>
          <div class="col-md-3 mb-3">
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>



      </form>
    </div>
  </div>
</div>
@endsection