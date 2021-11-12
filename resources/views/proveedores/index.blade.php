@extends('layouts.app')
@section('content')
<nav class="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('proveedores.index')}}">Proveedores</a></li>
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
      <table class="table table-striped " id="marcas-table">
        <thead>
          <tr>
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
        <tbody>
          <tr>
            <td>1</td>
            <td>William Logic</td>
            <td>
              <a class="nav-icon fa fa-globe" href="{{ route('proveedores.index')}}"></a>
            </td>
            <td>Brazil</td>
            <td>11-02-2021</td>
            <td>FLETERO</td>
            <td>
              <i class="nav-icon fa fa-check">
            </td>
            <td>
              <i class="nav-icon fa fa-star"><i class="nav-icon fa fa-star"><i class="nav-icon fa fa-star"><i class="nav-icon fa fa-star">
            </td>
            <td>
              <a class="btn btn-primary" href="" role="button">Selecionar</a>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('proveedores.create') }}" role="button">Crear Proveedor</a>
        <a class="btn btn-primary" href="" role="button">Campañas</a>
        <a class="btn btn-primary" href="" role="button">Fichas</a>
      </div>


    </div>
  </div>
</div>
@endsection