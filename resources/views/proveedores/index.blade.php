<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Compras-Ventas con Laravel y Vue Js- webtraining-it.com">
    <meta name="keyword" content="Sistema Compras-Ventas con Laravel y Vue Js">
    <title>Proyecto</title>
    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.min.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--PONER LOGO-->
        <!--<a class="navbar-brand" href="#"></a>-->
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('img/avatars/6.jpg') }}" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="d-md-down-none">usuario </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Cuenta</strong>
                    </div>
                    <a class="dropdown-item" href=""
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i> Cerrar sesión</a>

                    <form id="logout-form" action="" method="POST" style="display: none;">

                    </form>
                </div>
            </li>
        </ul>
    </header>

    <div class="app-body">
<!-- SIDEBAR -->
       <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="icon-speedometer"></i>Pricing Tarifas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-list"></i> Categorías</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-users"></i> Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-users"></i> Proveedores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-suitcase"></i> Reportes KPI</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Parametria</a>
                  </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
       </div>
<!--FIN SIDEBAR -->

       <main class="main">
            <nav class="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Proveedores</a></li>
              </ol>
            </nav>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                       <h2>Listado de Proveedores</h2><br/>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">

                            <div class="col-md-3 mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="">
                                    <button type="submit"  class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>

                        </div>
                        {{-- tabla --}}
                        <table class="table table-bordered table-striped table-sm">
                            {{-- encabezado columnas --}}
                            <thead>
                              <tr class="bg-primary">
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>País</th>
                                <th>Fecha Registro</th>
                                <th>Tipo Proveedor</th>
                                <th>Validación</th>
                                <th>Evaluacion</th>
                                <th>Opciones</th>
                              </tr>
                            </thead>
                            {{-- filas columnas --}}
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>William Logic</td>
                                <td></td>
                                <td>Brazil</td>
                                <td>11-02-2021</td>
                                <td>FLETERO</td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
                            </tbody>
                        </table>
                        {{-- paginacion tabla --}}
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">Anterior</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Siguiente</a>
                                </li>
                            </ul>
                        </nav>

                        <div>
                          <button class="btn btn-primary" type="submit">Crear Proveedor</button>
                          <button class="btn btn-primary" type="submit">Campañas</button>
                          <button class="btn btn-primary" type="submit">Fichas</button>
                        </div>


                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer class="app-footer">
        <span><a href="">DelpaGroup</a> &copy; 2021 DelpaGroup</span>
        <span class="ml-auto">Desarrollado por <a href="">DeltaGroup</a></span>
    </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
</body>

</html>