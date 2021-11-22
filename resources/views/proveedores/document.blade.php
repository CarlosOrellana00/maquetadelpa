@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{route('proveedores.document')}}">Documentos</a></li>
</ol>

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-align-justify"></i>
            William Logic - 001
          </div>
          <div class="card-body">

            <div class="table-responsive-sm">

              <form method="POST" action="http://52.14.50.96/client/storeDocumentCredit" accept-charset="UTF-8"
                id="form-credenciales" onsubmit="return validation()" autocomplete="off" enctype="multipart/form-data">
                <input name="_token" type="hidden" value="8NwQORIW6rEK93QjN51dQpvVrmb3rHELd9LxG2aG">

                <table class="table" id="marcas-table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Documento</th>
                      <th>Descripción</th>
                      {{-- <th>Subir Documento</th> --}}
                      <th>¿Documento Enviado?</th>
                      <th>¿Documento Validado?</th>
                      <th>Documentos Recibidos</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Escritura Empresa</td>
                      <td>Descripción de mi documento</td>
                      {{-- <td>
                        <input name="id_document[]" type="hidden" value="1">
                        <input type="file" name="file_1">
                      </td> --}}
                      <td>
                        <i class="fa fa-times-circle" style="color: #FF5722" aria-hidden="true"></i>
                      </td>
                      <td>
                        <i class="fa fa-check-square" style="color: #5cdb94" aria-hidden="true"></i>
                      </td>
                      <td>
                        <a href="http://52.14.50.96/client/documents/21/1" class="btn btn-success">Documentos (0) </a>
                        <a href="" class="btn btn-warning">Validar</a>
                      </td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>Representante Legal</td>
                      <td>Descripción de mi documento</td>
                      {{-- <td>
                        <input name="id_document[]" type="hidden" value="2">
                        <input type="file" name="file_2">
                      </td> --}}
                      <td>
                        <i class="fa fa-times-circle" style="color: #FF5722" aria-hidden="true"></i>
                      </td>
                      <td>
                        <i class="fa fa-check-square" style="color: #5cdb94" aria-hidden="true"></i>
                      </td>
                      <td>
                        <a href="http://52.14.50.96/client/documents/21/2" class="btn btn-success">Documentos (0) </a>
                        <a href="" class="btn btn-warning">Validar</a>
                      </td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>Últimos IVAs</td>
                      <td>Descripción de mi documento</td>
                      {{-- <td>
                        <input name="id_document[]" type="hidden" value="3">
                        <input type="file" name="file_3">
                      </td> --}}
                      <td>
                        <i class="fa fa-times-circle" style="color: #FF5722" aria-hidden="true"></i>
                      </td>
                      <td>
                        <i class="fa fa-check-square" style="color: #5cdb94" aria-hidden="true"></i>
                      </td>
                      <td>
                        <a href="http://52.14.50.96/client/documents/21/3" class="btn btn-success">Documentos (0) </a>
                        <a href="" class="btn btn-warning">Validar</a>
                      </td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td>Foto de la Empresa</td>
                      <td>Descripción de mi documento</td>
                      {{-- <td>
                        <input name="id_document[]" type="hidden" value="4">
                        <input type="file" name="file_4">
                      </td> --}}
                      <td>
                        <i class="fa fa-times-circle" style="color: #FF5722" aria-hidden="true"></i>
                      </td>
                      <td>
                        <i class="fa fa-check-square" style="color: #5cdb94" aria-hidden="true"></i>
                      </td>
                      <td>
                        <a href="http://52.14.50.96/client/documents/21/4" class="btn btn-success">Documentos (0) </a>
                        <a href="" class="btn btn-warning">Validar</a>
                      </td>
                    </tr>

                    <tr>
                      <td>5</td>
                      <td>Planilla de Empleados</td>
                      <td>Descripción de mi documento</td>
                      {{-- <td>
                        <input name="id_document[]" type="hidden" value="5">
                        <input type="file" name="file_5">
                      </td> --}}
                      <td>
                        <i class="fa fa-times-circle" style="color: #FF5722" aria-hidden="true"></i>
                      </td>
                      <td>
                        <i class="fa fa-check-square" style="color: #5cdb94" aria-hidden="true"></i>
                      </td>
                      <td>
                        <a href="http://52.14.50.96/client/documents/21/5" class="btn btn-success">Documentos (0) </a>
                        <a href="" class="btn btn-warning">Validar</a>
                      </td>
                    </tr>

                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <input name="id_user_client" type="hidden" value="73">
                        <input name="id_empresa" type="hidden" value="21">
                        <div class="form-group col-md-12">
                          <input class="btn btn-primary" type="submit" value="Enviar Documentación">
                        </div>
                      </td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>

                  </tbody>
                </table>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection