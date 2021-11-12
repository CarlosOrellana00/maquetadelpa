@extends('layouts.app')
@section('content')
<style type="text/css">
		html,body{
			overflow: hidden;
			background: white;
		}
	</style>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<style type="text/css">
</style>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Clientes</a></li>
  </ol>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Listado de Clientes</h2><br />
    </div>
    <div class="card-body">

      <form>
        <div class="form-row">

          <div class="col-md-4 mb-3">
            <label for="ccmonth">Servicios</label>
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>

          <div class="col-md-4 mb-3">
            <label for="ccmonth">Fecha Desde</label>
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>

          <div class="col-md-4 mb-3">
            <label for="ccmonth">Fecha Hasta</label>
            <select class="form-control" id="ccmonth">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>

        </div>


        <div class="form-row">

          <div class="form-row ">
            <div style="width: 600px; height: 100px;">
              <canvas id="chartOne" width="100" height="100"></canvas>
            </div>
          </div>

        </div>

      </form>

    </div>
  </div>
</div>




<script type="text/javascript">
		var ctxOne = document.getElementById("chartOne");
		var chartOne = new Chart(ctxOne, {
			type: 'bar',
			data: {
				labels: ["2011 - Ene","2011 - Feb","2011 - Mar","2011 - Abr","2011 - May",
                "2011 - Jun","2011 - Jul","2011 - Ago","2011 - Sep","2011 - Oct",
                "2011 - Nov","2011 - Dic", "2012 - Ene","2012 - Feb","2012 - Mar",
                "2012 - Abr","2012 - May","2012 - Jun"],
				datasets: [
				{
					label: "Record de Acción",
					backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#a65c6d","#24c412","#bb1112"],
					data: [1,2,4,5,2,4,1,3,1,3,2,1,4,2,4,2,1,2]
				}
				]
			},
			options: {
				cutoutPercentage: 70,
				responsive: true,
				maintainAspectRatio: true,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
@endsection