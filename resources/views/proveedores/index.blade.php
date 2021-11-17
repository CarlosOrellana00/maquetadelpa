@extends('layouts.app')
@section('content')
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ route('proveedores.index')}}">Proveedores</a>
    </li>
  </ol>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Administración Proveedores</h2><br />
    </div>
    <div class="card-body">

      <div class="pull-right mb-3">
        <a class="btn btn-success" href="{{ route('proveedores.create') }}" role="button">Crear Proveedor</a>
        <a class="btn btn-success" href="" role="button">Campañas</a>
        <a class="btn btn-success" href="" role="button">Fichas</a>
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
              <a class="" href="{{ route('proveedores.index')}}"></a>
              <img style="height: 30px;" src="http://52.14.50.96/img/map.png">
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

    </div>
  </div>
</div>
@endsection