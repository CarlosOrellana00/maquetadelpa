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
    <li class="breadcrumb-item">
      <a href="{{ route('clientes.index')}}">Clientes</a>
    </li>
    <li class="breadcrumb-item">
      <a href="{{ route('clientes.showmilla')}}">Información Comercial del Cliente</a>
    </li>
  </ol>
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h2>Información Comercial del Cliente</h2><br />
      </div>
        <div class="form-row">
          <div style="width: 400px; height: 400px;">
            <canvas id="chartOne" width="100p" height="100"></canvas>
          </div>
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
                "2011 - Nov","2011 - Dic" ],
				datasets: [
				{
					label: "Participacion de Mercado",
					backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#a65c6d","#24c412","#bb1112"],
					data: [10,8,20,12,11,13,14,15,14,18,17,19]
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