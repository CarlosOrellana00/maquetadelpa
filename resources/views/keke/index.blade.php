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
  <li class="breadcrumb-item"><a href="">Clientes</a></li>
</ol>
<div class="container-fluid">
  <div class="card">
    <div class="card-header">
      <h2>Listado de Clientes</h2><br />
    </div>







    <div class="card-body row">

      <form class="form-row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4 mb-3 ">
              <label for="ccmonth">Servicios</label>
              <select class="form-control" id="ccmonth">
                <option>1</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>

            <div class="col-md-4 mb-3 ">
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
        </div>

        <div class="col-md-12">
            <div style="width: 400px; height: 100px;">
              <canvas id="chartOne" width="100" height="100"></canvas>
            </div>
        </div>

        <div class="col-md-12">
          <div class="col-md-4">
          <table style="width: 100%">
            <tr>
              <td style="width:100%; padding: 0 20px;">
                <div class="form-group">
                  <div class="input-group">
                    <label for="ccmonth">Tipo Cliente</label>
                    <select class="form-control" id="ccmonth">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                </td>
              </td>
            </tr>

            <tr>
              <td style="width:100%; padding: 0 20px;">
                <div class="form-group">
                  <div class="input-group">
                    <label for="ccmonth">Fecha Desde</label>
                    <select class="form-control" id="ccmonth">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                </td>
              </td>
            </tr>

            <tr>
              <td style="width:100%; padding: 0 20px;">
                <div class="form-group">
                  <div class="input-group">
                    <label for="ccmonth">Fecha Hasta</label>
                    <select class="form-control" id="ccmonth">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                </td>
              </td>
            </tr>

          </table>
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
      labels: ["2011 - Ene", "2011 - Feb", "2011 - Mar","2011 - Ene", "2011 - Feb", "2011 - Mar","2011 - Ene", "2011 - Feb", "2011 - Mar","2011 - Ene", "2011 - Feb", "2011 - Mar"],
      datasets: [
        {
          label: "Record de Acción",
          backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"],
          data: [1, 2, 3,1,2,3,1,2,3,1,2,3]
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