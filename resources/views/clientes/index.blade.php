@extends('keke.app')
@section('content')
<nav class="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Clientes</a></li>
  </ol>
</nav>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Listado de Clientes</h2><br />
    </div>
    <div class="card-body">
      <div class="form-group row">
        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Identificador</span>
            <input type="text" class="form-control" placeholder="">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Nombre</span>
            <input type="text" class="form-control" placeholder="">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Tipo Cliente</span>
            <input type="text" class="form-control" placeholder="">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
          </div>
        </div>
      </div>
      <table class="table table-bordered table-striped table-sm">
        <thead>
          <tr class="bg-primary">
            <th>Id</th>
            <th>Identificador</th>
            <th>Nombre</th>
            <th>Tipo Cliente</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>País</th>
            <th>Fecha Registro</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>141213</td>
            <td>000123</td>
            <td>Jose</td>
            <td>Cliente</td>
            <td>Los Nogales #122</td>
            <td>Santiago</td>
            <td>Chile</td>
            <td>01/01/2021</td>
            <td>
              <a class="btn btn-primary" href="#" role="button">Boton 1</a>
              <a class="btn btn-success" href="#" role="button">Boton 2</a>
              <a class="btn btn-warning" href="#" role="button">Boton 3</a>
              <a class="btn btn-danger" href="#" role="button">Boton 4</a>
            </td>
          </tr>
        </tbody>
      </table>
      <nav>
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#">Anterior</a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">Siguiente</a>
          </li>
        </ul>
      </nav>
      <div>
        <button class="btn btn-primary" type="submit">Crear Cliente</button>
        <button class="btn btn-primary" type="submit">FichaCliente</button>
        <button class="btn btn-primary" type="submit">Compañia</button>
      </div>
    </div>
  </div>
</div>
@endsection