<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>DELPA GROUP</title>
  <META HTTP-EQUIV="Access-Control-Allow-Origin" CONTENT="http://delpatesting.cl">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 4.1.1 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/css/coreui.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@icon/coreui-icons-free@1.0.1-alpha.1/coreui-icons-free.css">
  <!-- PRO version // if you have PRO version licence than remove comment and use it. -->
  <link rel="icon" type="image/png" href="http://52.14.50.96/img/favicon.png">
  <!-- PRO version -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
  <!-- jQuery 3.1.1 -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
  <script src="http://52.14.50.96/js/colorbox.js"></script>
  <link rel="stylesheet" href="http://52.14.50.96/css/colorbox.css">
  <style type="text/css">
    .app-header {
      height: 100px;/* 140px */

    }

    .menu-delpa {
      height: 140px;
    }

    .header-fixed .app-body {
      margin-top: 140px !important;
    }

    .menu-name {
      color: #005383;
      text-align: left;
      font-size: 18px;
      margin-top: 0px;
    }

    .menu-item {
      color: #005383;
      text-align: left;
      font-size: 14px;
      margin-top: 0px;
      font-weight: bold;
      text-align: center;
    }

    .menu-icon {
      width: 30px;
      height: 30px;
    }

    .menu-budge {
      position: absolute !important;
      top: 10px !important;
      background: #002469 !important;
      color: white !important;
      border-radius: 12px !important;
      padding: 6px 10px !important;
      right: -5px !important;
      font-size: 9px !important;
    }

    .app-header .nav-item {
      margin-right: 20px;
    }

    .nav-header {
      background: #002469;
      border-radius: 0;
      z-index: 999;
      position: relative;
      padding: 0;
      width: 100vw;
      position: relative;
      top: 10px;
      text-align: center;
    }

    .navbar-light .navbar-nav .nav-link {
      color: #fff;
      font-weight: bold;
      font-size: 14px;
    }

    .navbar-light:hover .navbar-nav:hover .nav-link:hover {
      color: #fff;
      font-weight: bold;
      font-size: 14px;
    }

    .navbar-light:active .navbar-nav:active .nav-link:active {
      color: #fff;
      font-weight: bold;
      font-size: 14px;
    }

    .navbar-light:focus .navbar-nav:focus .nav-link:focus {
      color: #fff;
      font-weight: bold;
      font-size: 14px;
    }

    .navbar-expand-lg .navbar-nav {
      flex-direction: row;
    }

    .mr-center {
      margin: auto;
    }

    .dropdown-toggle::after {
      display: inline-block;
      margin-left: .255em;
      vertical-align: .255em;
      content: "";
      border-top: .3em solid;
      border-right: .3em solid transparent;
      border-bottom: 0;
      border-left: .3em solid transparent;
    }

    .border-right {
      border-right: 1px solid #dee2e6 !important;
    }
  </style>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

@yield('app')



</body>



<style type="text/css">
  td,
  th {
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

  .btn-link,
  a {
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

  .card .form-group label {
    font-weight: bold;
  }

  .height-chart {
    height: 400px;
  }

  @media only screen and (max-width: 600px) {
    .height-chart {
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

  function load_image(ID) {
    var img_src = $(ID).attr("data-full");
    console.log(img_src);
    jQuery.colorbox({ href: img_src, opacity: 0, width: '95%', height: '95%', maxWidth: '500px', maxHeight: '500px', });
  }
  $(document).ready(function () {
    $(document).on("click", ".show-box-img", function () {
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
      columnDefs: [{
        "targets": 'no-sort',
        "orderable": false,
      }],
      order: [[1, "asc"]],
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
  });
</script>
<style type="text/css">
  .dataTables_wrapper .dataTables_info {
    clear: both;
    float: left;
    padding-top: .755em;
    font-size: 12px;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button.disabled,
  .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover,
  .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
    cursor: default;
    color: #666 !important;
    border: 1px solid transparent;
    background: transparent;
    box-shadow: none;
    font-size: 12px;
  }

  .dataTables_wrapper .dataTables_length,
  .dataTables_wrapper .dataTables_filter,
  .dataTables_wrapper .dataTables_info,
  .dataTables_wrapper .dataTables_processing,
  .dataTables_wrapper .dataTables_paginate {
    color: #333;
    font-size: 12px;
  }

  button.dt-button,
  div.dt-button,
  a.dt-button,
  input.dt-button {
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
    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0, StartColorStr="rgba(230, 230, 230, 0.1)", EndColorStr="rgba(0, 0, 0, 0.1)");
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    text-decoration: none;
    outline: none;
    text-overflow: ellipsis;
    font-size: 14px;
  }

  button.dt-button:hover {
    color: black;
  }

  table.dataTable tbody th,
  table.dataTable tbody td {
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

  .alert {
    width: 98%;
    margin: 15px auto !important;
  }

  .fa-plus-square-o {
    display: none;
  }

  .fa-align-justify {
    display: none;
  }

  .closebtn {
    position: absolute;
    top: 0px;
    right: 10px;
  }
</style>

</html>