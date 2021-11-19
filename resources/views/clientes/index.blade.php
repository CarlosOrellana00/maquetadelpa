@extends('layouts.app')
@section('content')
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
     <a href="{{ route('clientes.index')}}">Clientes</a>
    </li>
  </ol>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Listado de Clientes</h2><br />
    </div>
    <div class="card-body">

      <div class="pull-right mb-3">
        <a class="btn btn-success" href="{{ route('clientes.create') }}" role="button">Crear Cliente</a>
        <a class="btn btn-success" href="{{ route('clientes.show') }}" role="button">Ficha Cliente</a>
        <a class="btn btn-success" href="{{ route('clientes.campaign')}} " role="button">Compañia</a>
      </div>

      <table  class="table table-striped" id="marcas-table">
        <thead>
          <tr class="">
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
            <td>
              <a class="" href="{{ route('clientes.index')}}">
                <img style="height: 30px;" src="http://52.14.50.96/img/map.png">
              </a>
            </td>
            <td>Santiago</td>
            <td>Chile</td>
            <td>01/01/2021</td>
            <td>
              <a class="btn btn-warning" href="" role="button">Editar</a>
              <i class="nav-icon fa fa-shield">
            </td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>
@endsection