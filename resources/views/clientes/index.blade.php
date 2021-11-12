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
            <td>Los Nogales #122</td>
            <td>Santiago</td>
            <td>Chile</td>
            <td>01/01/2021</td>
            <td>
              <a class="btn btn-primary" href="" role="button">Editar</a>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('clientes.create') }}" role="button">Crear Cliente</a>
        <a class="btn btn-primary" href="{{ route('clientes.show') }}" role="button">Ficha Cliente</a>
        <a class="btn btn-primary" href="{{ route('clientes.campaign')}} " role="button">Compañia</a>
      </div>
    </div>
  </div>
</div>
@endsection