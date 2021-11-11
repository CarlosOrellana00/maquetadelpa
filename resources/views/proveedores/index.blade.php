@extends('keke.app')
@section('content')
<nav class="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Proveedores</a></li>
  </ol>
</nav>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Listado de Proveedores</h2><br />
    </div>
    <div class="card-body">
      <div class="form-group row">

        <div class="col-md-3 mb-3">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div>
        </div>

      </div>
      {{-- tabla --}}
      <table class="table table-bordered table-striped table-sm">
        {{-- encabezado columnas --}}
        <thead>
          <tr class="bg-primary">
            <th>Id</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>País</th>
            <th>Fecha Registro</th>
            <th>Tipo Proveedor</th>
            <th>Validación</th>
            <th>Evaluacion</th>
            <th>Opciones</th>
          </tr>
        </thead>
        {{-- filas columnas --}}
        <tbody>
          <tr>
            <td>1</td>
            <td>William Logic</td>
            <td></td>
            <td>Brazil</td>
            <td>11-02-2021</td>
            <td>FLETERO</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      {{-- paginacion tabla --}}
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
        <button class="btn btn-primary" type="submit">Crear Proveedor</button>
        <button class="btn btn-primary" type="submit">Campañas</button>
        <button class="btn btn-primary" type="submit">Fichas</button>
      </div>


    </div>
  </div>
</div>
@endsection