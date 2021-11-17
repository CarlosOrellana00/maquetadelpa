@extends('layouts.app')
@section('content')
<style type="text/css">
  html,
  body {
    overflow: hidden;
    background: white;
  }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style type="text/css">
</style>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ route("reportes.index")}}">Reportes</a></li>
</ol>
<div class="card-body">
  <div class="container-fluid">
    <div class="card">

      <div class="card-header">
        <h2>Reportes de Gestion</h2><br />
      </div>

      <div class="card-body">
        <form class="needs-validation" novalidate>

          <div class="row mb-5">

            <div class="col-4">
              <label for="ccmonth">Servicios</label>
                <select class="form-control" id="ccmonth">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>

            <div class="col-4">
              <label for="ccmonth">Fecha Desde</label>
                <select class="form-control" id="ccmonth">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>

            <div class="col-4">
              <label for="ccmonth">Fecha Hasta</label>
                <select class="form-control" id="ccmonth">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
              </select>
            </div>

          </div>

          <div class="row">

            <div class="col-8">

              <div class="row mb-3">
                <div class="mb-20">
                  <div class="row align-items-center">
                    <div class="col-4">
                      <div style="width: 500px; height: 100px;">
                        <canvas id="chartOne" width="400" height="150"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-4">
              <div class="">
                <button class="btn btn-primary pull-right" type="submit">Exportar</button>
              </div>
            </div>

          </div>

        </form>
      </div>

    </div>
  </div>

</div>

<script type="text/javascript">
  var ctxOne = document.getElementById("chartOne");
  var chartOne = new Chart(ctxOne, {
    type: 'bar',
    data: {
      labels: ["2011 - Ene", "2011 - Feb", "2011 - Mar","2011 - Ene", "2011 - Feb",
               "2011 - Mar","2011 - Ene", "2011 - Feb", "2011 - Mar","2011 - Ene",
               "2011 - Feb", "2011 - Mar","2011 - Abr", "2011 - May", "2011 - Jun",
               "2011 - Jul", "2011 - Ago", "2011 - Sep","2011 - Oct", "2011 - Nov",
               "2011 -Dic"],
      datasets: [
        {
          label: "Record de Acción",
          backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"],
          data: [1, 2, 3,1,2,3,1,2,3,1,2,3,1,2,3,1,2,3,1,2,3]
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