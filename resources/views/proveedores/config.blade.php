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

          <div class="col-6">
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

              <div class="card text-center border-primary mb-3">
                <div class="card-header">
                  Tipo Proveedor
                </div>
                <div class="card-body text-primary">
                  <button class="btn btn-primary mb-3" type="submit">Aéreo</button>
                  <button class="btn btn-primary mb-3" type="submit">Maritimo</button>
                  <button class="btn btn-primary mb-3" type="submit">Terrestre</button>
                </div>
              </div>

              <div class="card text-center border-primary mb-3">
                <div class="card-header text-center">Puntuación</div>

                  <div class="card-body">
                    <div class="row">
                      <div>
                        <label>Puntuación:</label>
                      </div>
                    </div>

                    <div class="row">
                      <div>
                        <div>
                          <label>Comunicacion y capacidad de respuesta:</label>

                        </div>
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

                    {{-- <div class="card text-center border-primary mb-3">
                      <div class="card-header">
                        Tipo Proveedor
                      </div>
                      <div class="card-body text-primary">
                        <button class="btn btn-primary mb-3" type="submit">Aéreo</button>
                        <button class="btn btn-primary mb-3" type="submit">Maritimo</button>
                        <button class="btn btn-primary mb-3" type="submit">Terrestre</button>
                      </div>
                    </div> --}}

                    <div class="row">

                      <div class="col-12">
                        Habilitado:
                      </div>

                      <div class="col-6">
                        <input class="form-check-input" type="radio" name="persoradio" id="persoradio1">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Si
                        </label>
                      </div>

                      <div class="col-6">
                        <input class="form-check-input" type="radio" name="persoradio" id="persoradio2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          No
                        </label>
                      </div>

                        {{-- <div>
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
                        </div> --}}
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
                  <div class="card-header text-center">
                    <h4>Cotización #512</h4>
                    <p>10-10-2021</p>
                  </div>
                  <div class="card-body text-center">
                    <p>Resputa de Cotización: Aerea </p>
                    <a href="">ver Respuesta </a>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb3">
                  <div class="card-header text-center">
                    <h4>Cotización #513</h4>
                    <p>11-10-2021</p>
                  </div>
                  <div class="card-body text-center">
                    <p>Resputa de Cotización: Maritima </p>
                    <a href="">ver Respuesta </a>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb3">
                  <div class="card-header text-center">
                    <h4>Cotización #512</h4>
                    <p>12-10-2021</p>
                  </div>
                  <div class="card-body text-center">
                    <p>Resputa de Cotización: Terrestre</p>
                    <a href="">ver Respuesta </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <div class="row">

              <div class="card text-center col-12">
              {{-- <div class="card text-center card-custom"> --}}
                  <h4>Web</h4>
                  <div class="card ">

                    <div class="">
                      <label for="validationCustom01">Visitas</label>
                      <div>
                        <input type="text" class="form-control" id="validationCustom01" value="" placeholder="5" readonly>
                      </div>
                    </div>

                    <div class="">
                      <label for="validationCustom01">Tiempo</label>
                      <div>
                        <input type="text" class="form-control" id="validationCustom01" value="" placeholder="15 minutos" readonly>
                      </div>
                    </div>

                    <div class="">
                      <label for="validationCustom01">Ultimo Ingreso</label>
                      <div>
                        <input type="text" class="form-control" id="validationCustom01" value="" placeholder="5 dias" readonly>
                      </div>
                    </div>

                  </div>
              </div>

            </div>

            <div class="row">
              <div class="card text-center col-12">
                  <h4>Chat</h4>
                  <div class="card">

                    <button class="btn btn-primary pull-right mb-3" type="submit">
                      <i class="button nav-icon fa fa-wechat">
                        Chat
                      </i>
                    </button>

                  </div>
                </div>

            </div>
          </div>

          <div class="col-8">
            <div class="card-header text-center">
                {{-- <h2>El Grafico</h2> --}}
                <div class="card">
                  <div class="row">
                    <div class="group">
                      <img src="{{ asset('img/extra/multi.jpg') }}" hight="900" width="700" class="rounded float-left" alt="...">
                    </div>
                  </div>
                </diV>
              </div>

          </div>
        </div>

      </div>
    </div>
  </div>

<style type="text/css">

	.card-custom {
		background: white;
		padding: 25px;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		transition: 0.3s;
		border-radius: 5px;
		margin-bottom: 20px;
		color: #002469;
		font-weight: bold;
		text-align: right;
		font-size: 18px;
		margin-top: 16px;
	}

	.card{
		box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2);
		transition: 0.3s;
		border-radius: 10px;
		padding: 10px;
		margin-top: 16px;
	}

	.tag-custom {
		background: #002469;
		padding: 5px 10px;
		color: white;
		border-radius: 5px;
		margin-top: 10px;
	}

</style>
@endsection