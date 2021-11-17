@extends('layouts.app')
@section('content')

<script src="http://52.14.50.96/js/chartjs.js"></script>
<script type="text/javascript">
  function openUrlModal(URL){
  window.URLIFRAME = URL;
  $('#myModalIframe').modal('show');
}

$(document).on("click", ".btnIframe", function(){
  window.URLIFRAME = $(this).attr('url');
  $('#myModalIframe').find('iframe').attr('src',window.URLIFRAME);
  setTimeout(function(){ openUrlModal(window.URLIFRAME); }, 1000);
});
  $(document).ready(function(){
/*
$('.btnIframe').click(function(){
  window.URLIFRAME = $(this).attr('data-url');
  openUrlModal(window.URLIFRAME);
});
*/
$('.iframe-close').click(function(){
  //window.location.reload();
});
$('#myModalIframe').on('show.bs.modal',function(){      //correct here use 'shown.bs.modal' event which comes in bootstrap3
  //$('#myModalIframe').find('iframe').attr('src',window.URLIFRAME);
});
});
</script>

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

          <div class="col-md-4 btnIframe" url="http://52.14.50.96/graph/finalizadas">
            <div class="card-custom">
              <div class="row">
                <div class="col-md-4"><img height="70px" src="http://52.14.50.96/svg/cart.svg"></div>
                <div class="col-md-8">
                  Compras Finalizadas <br> <label class="tag-custom">0 compras</label>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 btnIframe" url="http://52.14.50.96/graph/cotizaciones">
            <div class="card-custom">
              <div class="row">
                <div class="col-md-4"><img height="70px" src="http://52.14.50.96/svg/clock.svg"></div>
                <div class="col-md-8">
                  Cotizaciones <br> <label class="tag-custom">0 compras</label>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 btnIframe" url="http://52.14.50.96/graph/usuarios">
            <div class="card-custom">
              <div class="row">
                <div class="col-md-4"><img height="70px" src="http://52.14.50.96/svg/users.svg"></div>
                <div class="col-md-8">
                  Contactos Habilitados <br> <label class="tag-custom">1 contactos</label>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 btnIframe" url="http://52.14.50.96/graph/fcl">
            <div class="card-custom">
              <div class="row">
                <div class="col-md-4"><img height="70px" src="http://52.14.50.96/svg/fcl.svg"></div>
                <div class="col-md-8">
                  Servicios FCL <br> <label class="tag-custom">0 servicios</label>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 btnIframe" url="http://52.14.50.96/graph/lcl">
            <div class="card-custom">
              <div class="row">
                <div class="col-md-4"><img height="70px" src="http://52.14.50.96/svg/lcl.svg"></div>
                <div class="col-md-8">
                  Servicios LCL <br> <label class="tag-custom">0 servicios</label>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 btnIframe" url="http://52.14.50.96/graph/aerial">
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
    td,th{
        vertical-align: middle !important;
        text-align: center !important;
    }


    .btn-primary {
        color: #fff;
        background-color: #002469;
        border-color: #002469;
    }


    .btn-primary:hover {
        color: #fff;
        background-color: #001640;
        border-color: #001640;
    }


    .btn-link, a {
        font-weight: 400;
        color: #002469;
        text-decoration: none;
    }



    .sidebar {
        background: #002469;
    }



    .btn-success {
        color: #fff;
        background-color: #5cdb94;
        border-color: #5cdb94;
    }



    .btn-success:hover {
        color: #fff;
        background-color: #49b87a;
        border-color: #49b87a;
    }



    .btn-danger {
        color: #fff;
        background-color: #D32F2F;
        border-color: #D32F2F;
    }


    .sidebar .nav-link.active {
        color: #fff;
        background: #001640;
    }


    .sidebar .nav-link .nav-icon {
        display: inline-block;
        width: 1.09375rem;
        margin: 0 .5rem 0 0;
        font-size: .875rem;
        color: #ecf0f4;
        text-align: center;
    }

    .sidebar .nav-link:hover {
        color: #fff;
        background: #5cdb94;
    }


    body {
        background-color: #f7f7f7;
    }


    .card .form-group label{
        font-weight: bold;
    }


    .height-chart{
        height: 400px;
    }


    @media  only screen and (max-width: 600px) {
      .height-chart{
        height: 150px;
    }

}

</style>
<script src="http://52.14.50.96/js/datatable.js"></script>
<link media="all" type="text/css" rel="stylesheet" href="http://52.14.50.96/css/datatable.css">
<link media="all" type="text/css" rel="stylesheet" href="http://52.14.50.96/css/buttons.dataTables.min.css">
<script src="http://52.14.50.96/js/dataTables.buttons.min.js"></script>
<script src="http://52.14.50.96/js/jszip.min.js"></script>
<script src="http://52.14.50.96/js/pdfmake.min.js"></script>
<script src="http://52.14.50.96/js/vfs_fonts.js"></script>
<script src="http://52.14.50.96/js/buttons.html5.min.js"></script>
<script type="text/javascript">
    function load_image(ID){
      var img_src = $(ID).attr("data-full");
      console.log(img_src);
      jQuery.colorbox({href: img_src, opacity:0, width: '95%', height: '95%', maxWidth: '500px', maxHeight: '500px',});
  }
  $(document).ready( function () {
    $(document).on("click",".show-box-img",function() {
        load_image(this);
    });
    $('.table-striped').DataTable({
        "bLengthChange": false,
        "pageLength": 15,
        "language": {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
          }
      }
  });
    $('.table-dashboard').DataTable({
        "bLengthChange": false,
        "dom": 'Bfrtip',
        "buttons": [
        'excelHtml5',
        'csvHtml5',
        {
            "extend": 'pdfHtml5',
            "orientation": 'vertical',
            "pageSize": 'LEGAL'
        }
        ],
        "pageLength": 30,
        columnDefs: [ {
          "targets": 'no-sort',
          "orderable": false,
      } ],
      order: [[ 1, "asc" ]],
      "language": {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
      }
  }
});
} );
</script>
<style type="text/css">
    .dataTables_wrapper .dataTables_info {
        clear: both;
        float: left;
        padding-top: .755em;
        font-size: 12px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
        cursor: default;
        color: #666 !important;
        border: 1px solid transparent;
        background: transparent;
        box-shadow: none;
        font-size: 12px;
    }

    .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
        color: #333;
        font-size: 12px;
    }



    button.dt-button, div.dt-button, a.dt-button, input.dt-button {
        position: relative;
        display: inline-block;
        box-sizing: border-box;
        margin-right: .333em;
        margin-bottom: .333em;
        padding: .5em 1em;
        border: 1px solid rgb(4, 46, 86);
        border-radius: 2px;
        cursor: pointer;
        font-size: .88em;
        line-height: 1.6em;
        color: white;
        white-space: nowrap;
        overflow: hidden;
        background: -webkit-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
        background: -moz-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
        background: -ms-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
        background: -o-linear-gradient(top, rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
        background: linear-gradient(to bottom, rgb(5, 57, 107) 0%, rgb(4, 46, 86) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr="rgba(230, 230, 230, 0.1)", EndColorStr="rgba(0, 0, 0, 0.1)");
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        text-decoration: none;
        outline: none;
        text-overflow: ellipsis;
        font-size: 14px;
    }



    button.dt-button:hover{

        color:black;

    }


    table.dataTable tbody th, table.dataTable tbody td {
        padding: 5px;
    }


    .card {
        border: none !important;
    }


    .card-header {
        padding: 1rem 1.25rem !important;
        margin-bottom: 0;
        background-color: white !important;
        border-bottom: 1px solid #e8e9eb;
        color: #5C5C5C !important;
        font-weight: 200;
    }


    .alert{
      width: 98%;
      margin: 15px auto !important;
  }

  .fa-plus-square-o{
    display: none;
}

.fa-align-justify{
    display: none;
}


.closebtn{
    position: absolute;
    top: 0px;
    right: 10px;
}




</style>
</html>





@endsection
