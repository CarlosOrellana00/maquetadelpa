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
                <li class="breadcrumb-item"><a href="">Clientes</a></li>
                <li class="breadcrumb-item"><a href="">Campaña Cliente</a></li>
              </ol>
            </nav>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                       <h2>Campaña Cliente</h2><br/>
                    </div>
                    <div class="card-body">
                      <form class="needs-validation" novalidate>

                        <div class="form-row">
                          <div class="col-md-3 mb-3">
                            <label for="ccmonth">Tipo Cliente</label>
                              <select class="form-control" id="ccmonth">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                              </select>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="ccmonth">País</label>
                              <select class="form-control" id="ccmonth">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                              </select>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="ccmonth">Ciudad</label>
                              <select class="form-control" id="ccmonth">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Nombre Campaña</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                          </div>
                        </div>

                        <div class="form-row">

                          <div class="form-group row">
                            <label class="col-md-6 col-form-label" for="date-input">Inicio Campaña</label>
                            <div class="col-md-9">
                              <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date"><span class="help-block"></span>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-md-6 col-form-label" for="date-input">Fin Campaña</label>
                            <div class="col-md-9">
                              <input class="form-control" id="date-input" type="date" name="date-input" placeholder="date"><span class="help-block"></span>
                            </div>
                          </div>

                        </div>

                        <div>
                          <button class="btn btn-primary" type="submit">Generar</button>
                        </div>

                      </form>
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