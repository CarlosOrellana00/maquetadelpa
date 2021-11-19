@extends('layouts.app')
@section('content')



    <ol class="breadcrumb">
     <li class="breadcrumb-item"><a href="">Home</a></li>
    </ol>
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h2>Bienvenido Usuario Administrador</h2><br/>
      </div>

      <div class="container-fluid">

        <div class="row">

          <div class="col-md-4 btnIframe" url="">
            <div class="card-custom">
              <div class="row">
                <div class="col-md-4"><img height="70px" src="http://52.14.50.96/svg/cart.svg"></div>
                <div class="col-md-8">
                  Compras Finalizadas <br> <label class="tag-custom">0 compras</label>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 btnIframe" url="">
            <div class="card-custom">
              <div class="row">
                <div class="col-md-4"><img height="70px" src="http://52.14.50.96/svg/clock.svg"></div>
                <div class="col-md-8">
                  Cotizaciones <br> <label class="tag-custom">0 compras</label>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 btnIframe" url="">
            <div class="card-custom">
              <div class="row">
                <div class="col-md-4"><img height="70px" src="http://52.14.50.96/svg/users.svg"></div>
                <div class="col-md-8">
                  Contactos Habilitados <br> <label class="tag-custom">1 contactos</label>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 btnIframe" url="">
            <div class="card-custom">
              <div class="row">
                <div class="col-md-4"><img height="70px" src="http://52.14.50.96/svg/fcl.svg"></div>
                <div class="col-md-8">
                  Servicios FCL <br> <label class="tag-custom">0 servicios</label>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 btnIframe" url="">
            <div class="card-custom">
              <div class="row">
                <div class="col-md-4"><img height="70px" src="http://52.14.50.96/svg/lcl.svg"></div>
                <div class="col-md-8">
                  Servicios LCL <br> <label class="tag-custom">0 servicios</label>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 btnIframe" url="">
            <div class="card-custom">
              <div class="row">
                <div class="col-md-4"><img height="70px" src="http://52.14.50.96/svg/aerial.svg"></div>
                <div class="col-md-8">
                  Servicios Aéreos <br> <label class="tag-custom">0 servicios</label>
                </div>
              </div>
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
