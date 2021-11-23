<div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('home.index') }}">
              <i class="nav-icon fa fa-bar-home"></i>
              <span>Inicio</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('clientes.index')}}">
              <i class="nav-icon fa fa-users"></i>
              <span>Clientes</span>
            </a>
          </li>

          <li class="nav-item nav-dropdown c-show">
            <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon fa fa-pencil-square-o"></i> Proveedores</a>
              <ul class="nav-dropdown-items">
                  <li class="nav-item"><a class="nav-link" href="{{ route('proveedores.index')}}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="nav-icon fa fa-ship"></i> Administración</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('proveedores.config')}}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="nav-icon fa fa-ship"></i> Configuración</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('proveedores.contact')}}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="nav-icon fa fa-ship"></i> Contactos</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('proveedores.document')}}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="nav-icon fa fa-ship"></i> Documentos</a></li>
              </ul>
          </li>

          {{--PENDIENTES--}}

          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.tarifa')}}">
              <i class="nav-icon fa fa-id-card-o"></i>
              <span>Princing Tarifas -Prov</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.credit')}}">
              <i class="nav-icon fa fa-id-card-o"></i>
              <span>Creditos -Prov</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.operation')}}">
              <i class="nav-icon fa fa-id-card-o"></i>
              <span>Operaciones -Prov</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.payment')}}">
              <i class="nav-icon fa fa-id-card-o"></i>
              <span>Facturación/Pagos -Prov</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.cotizacion')}}">
              <i class="nav-icon fa fa-id-card-o"></i>
              <span>Cotizaciones Respuestas Manuales -Prov</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.tag')}}">
              <i class="nav-icon fa fa-id-card-o"></i>
              <span>TAG -Prov</span>
            </a>
          </li> --}}
          {{--FIN PENDIENTES  --}}

          <li class="nav-item">
            <a class="nav-link" href="{{ route('reportes.index') }}">
              <i class="nav-icon fa fa-building"></i>
              <span>Reportes KPI</span>
            </a>
          </li>

          <li class="nav-item nav-dropdown c-show">
            <a class="nav-link nav-dropdown-toggle" href="#">
              <i class="nav-icon fa fa-pencil-square-o"></i>Parametria</a>
              <ul class="nav-dropdown-items">
                  <li class="nav-item"><a class="nav-link" href="{{ route('parametria.mantenedores') }}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="nav-icon fa fa-ship"></i> Mantenedores</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('parametria.config') }}">&nbsp;&nbsp;&nbsp;&nbsp;<i class="nav-icon fa fa-ship"></i> Personalización Sistema</a></li>
              </ul>
          </li>

          {{-- CERRAR SECCIÓN --}}
          {{-- <li class="nav-item">
              <a class="nav-link" href="">
                  <i class="nav-icon fa fa-sign-out"></i>
                  <span>Cerrar Sesión</span>
              </a>
          </li> --}}

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>