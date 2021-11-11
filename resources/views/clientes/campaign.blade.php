@extends('keke.app')
@section('content')
<nav class="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Clientes</a></li>
    <li class="breadcrumb-item"><a href="">Campaña Cliente</a></li>
  </ol>
</nav>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Campaña Cliente</h2><br />
    </div>
    <div class="card-body">
      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-3 mb-3">
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
          <div class="col-md-3 mb-3">
            <label for="ccmonth">País</label>
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
          <div class="col-md-3 mb-3">
            <label for="ccmonth">Ciudad</label>
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
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Nombre Campaña</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group row">
            <label class="col-md-6 col-form-label" for="date-input">Inicio Campaña</label>
            <div class="col-md-9">
              <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date"><span
                class="help-block"></span>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-6 col-form-label" for="date-input">Fin Campaña</label>
            <div class="col-md-9">
              <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date"><span
                class="help-block"></span>
            </div>
          </div>
        </div>
        <div>
          <button class="btn btn-primary" type="submit">Generar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection