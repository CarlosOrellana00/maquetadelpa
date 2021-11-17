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

          <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.index')}}">
              <i class="nav-icon fa fa-id-card-o"></i>
              <span>Proveedores</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.index')}}">
              <i class="nav-icon fa fa-id-card-o"></i>
              <span>Administración -Prov</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.config')}}">
              <i class="nav-icon fa fa-id-card-o"></i>
              <span>Configuración -Prov</span>
            </a>
          </li>

          {{--  --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.contact')}}">
              <i class="nav-icon fa fa-id-card-o"></i>
              <span>Contactos -Prov</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('proveedores.document')}}">
              <i class="nav-icon fa fa-id-card-o"></i>
              <span>Documentos -Prov</span>
            </a>
          </li>
          <li class="nav-item">
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
          </li>
          {{--  --}}

          <li class="nav-item">
            <a class="nav-link" href="{{ route('reportes.index') }}">
              <i class="nav-icon fa fa-building"></i>
              <span>Reportes KPI</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('parametria.mantenedores') }}">
              <i class="nav-icon fa fa-bar-chart"></i>
              <span>Parametria</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('parametria.mantenedores') }}">
              <i class="nav-icon fa fa-bar-chart"></i>
              <span>Mantenedores -Para</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('parametria.config') }}">
              <i class="nav-icon fa fa-bar-chart"></i>
              <span>Personalización Sistema -Para</span>
            </a>
          </li>

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>