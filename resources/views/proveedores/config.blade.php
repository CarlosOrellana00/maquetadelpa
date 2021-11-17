@extends('layouts.app')
@section('content')
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ route('proveedores.config')}}">Configuración</a></li>
</ol>
<div class="container">
  <div class="card">
    <div class="card-header">
      <h2>Configuración</h2>
    </div>
    <div class="card-body">
      <form class="needs-validation" novalidate>

        <div class="row">

          <div class="col-3">
            <div class="card-header text-center">
              <h2>Perfil</h2>
            </div>
            <div class="card">

              <div class="input-group mb-3">
                {{-- <span class="input-group-addon" id="basic-addon1">Identificador</span> --}}
                <label>Identificador</label>
                <input type="text" class="form-control" placeholder="">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>

              <div class="card border-primary mb-3">
                <div class="card-header">Tipo Proveedor</div>
                <div class="card-body text-primary">
                  <button class="btn btn-primary mb-3" type="submit">Aereo</button>
                  <button class="btn btn-primary mb-3" type="submit">Maritimo</button>
                  <button class="btn btn-primary mb-3" type="submit">Terrestre</button>
                </div>
              </div>

              <div class="card border-primary mb-3">
                <div class="card-header text-center">Puntuación</div>

                <div class="row">
                  <div>
                    <label>Puntuación:</label>

                  </div>
                </div>

                <div class="row">
                  <div>
                    <label>Comunicacion y capacidad de respuesta:</label>

                  </div>
                </div>

                <div class="row">
                  <div>
                    <label>Cumplio los Costes Estimados:</label>

                  </div>
                </div>

                <div class="row">
                  <div>
                    <label>Cumplio los Plazos de Entrega:</label>

                  </div>
                </div>

                <div class="row">
                  <div>
                    <label>Calidad del Resultado:</label>

                  </div>
                </div>

                <div class="row">
                  <div>
                    <label>Habilitado:</label>
                  </div>
                  <div class="row">
                    <ul>
                      <li style="line-height: 15px; font-weight: bold;">
                        <input class="form-check-input" type="radio" name="persoradio" id="persoradio1">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Si
                        </label>
                      </li>
                      <li style="line-height: 15px; font-weight: bold;">
                        <input class="form-check-input" type="radio" name="persoradio" id="persoradio2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          No
                        </label>
                      </li>
                    </ul>
                  </div>

                </div>

              </div>

            </div>
          </div>

          <div class="col-6">
            <div class="card-header text-center">
              <h2>Actividades</h2>
            </div>
            <div class="card">

              <diV class="row mb-5">
                  <div class="col-4">
                    <p>Filtro de actividades: Cotizaciones</p>
                  </div>
                  <div class="col-4">
                    <p>Fecha de Inicio</p>
                     <select class="form-control" id="ccmonth">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                    </select>
                  </div>
                  <div class="col-4">
                    <p>Fecha de Termino</p>
                     <select class="form-control" id="ccmonth">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                    </select>
                  </div>
              </div>

              <div class="row">
                <div class="col-12 mb3">
                  <div class="card-header">
                    <h4>Cotización #512</h4>
                    <p>10-10-2021</p>
                  </div>
                  <div class="card-body">
                    <p>Resputa de Cotización: Aerea </p>
                    <a href="">ver Respuesta </a>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb3">
                  <div class="card-header">
                    <h4>Cotización #513</h4>
                    <p>11-10-2021</p>
                  </div>
                  <div class="card-body">
                    <p>Resputa de Cotización: Maritima </p>
                    <a href="">ver Respuesta </a>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb3">
                  <div class="card-header">
                    <h4>Cotización #512</h4>
                    <p>12-10-2021</p>
                  </div>
                  <div class="card-body">
                    <p>Resputa de Cotización: Terrestre</p>
                    <a href="">ver Respuesta </a>
                  </div>
                </div>
              </div>


            </div>
          </div>

          <div class="col-3">
            <div class="card-header text-center">
              <h4>Configuraciones</h4>
            </div>
            <div class="card">
              <button class="btn btn-primary pull-right mb-3" type="submit">Contactos</button>
              <button class="btn btn-primary pull-right mb-3" type="submit">Documentos</button>
              <button class="btn btn-primary pull-right mb-3" type="submit">Princing Tarifas</button>
              <button class="btn btn-primary pull-right mb-3" type="submit">Creditos</button>
              <button class="btn btn-primary pull-right mb-3" type="submit">Operaciones</button>
              <button class="btn btn-primary pull-right mb-3" type="submit">Facturación/Pagos</button>
              <button class="btn btn-primary pull-right mb-3" type="submit">Cotizaciones Respuestas Manuales</button>
              <button class="btn btn-primary pull-right mb-3" type="submit">TAG</button>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <div class="row">

              <div class="card">
                  <h4>Web</h4>
                  <div class="card">

                    <div class="">
                      <label for="validationCustom01">Visitas</label>
                      <div>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                      </div>
                    </div>

                    <div class="">
                      <label for="validationCustom01">Tiempo</label>
                      <div>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                      </div>
                    </div>

                    <div class="">
                      <label for="validationCustom01">Ultimo Ingreso</label>
                      <div>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                      </div>
                    </div>

                  </div>
                </div>



            </div>

            <div class="row">
              <div class="card">
                  <h4>Chat</h4>
                  <div class="card">

                    <div class="">
                      <a class="btn btn-primary hipchat mb-3"  href="" role="button">chat</a>
                    </div>

                  </div>
                </div>

            </div>
          </div>

          <div class="col-8">
            <div class="card-header text-center">
                <h2>El Grafico</h2>
              </div>

          </div>
        </div>

      </div>
    </div>
  </div>
@endsection