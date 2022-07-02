{{-- @include('components.super.header') --}}

<div class="container">
  <nav class="js-mega-menu flex-grow-1">
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbarDoubleLineContainerNavDropdown">
      <ul class="navbar-nav">
        <!-- Dashboards -->
        

        <li class="nav-item">
          <a class="nav-link " href="#"
            data-placement="left">
            <i class="bi-house-door dropdown-item-icon"></i> Dashboard
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ (request()->is('*/anggotas*')) ? 'active' : '' }}" href="#"
            data-placement="left">
            <i class="bi-people dropdown-item-icon"></i> Anggota
          </a>
        </li>

        <!-- Apps -->
        {{-- <li class="hs-has-sub-menu nav-item">
          <a id="appsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle " href="#" role="button"><i
              class="bi-app-indicator dropdown-item-icon"></i> Apps</a>

          <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="appsMegaMenu"
            style="min-width: 14rem;">
            <a class="dropdown-item "
              href="https://htmlstream.com/preview/front-dashboard-v2.0/apps-kanban.html">Kanban</a>
            <a class="dropdown-item "
              href="https://htmlstream.com/preview/front-dashboard-v2.0/apps-calendar.html">Calendar</a>
            <a class="dropdown-item "
              href="https://htmlstream.com/preview/front-dashboard-v2.0/apps-invoice-generator.html">Invoice
              Generator</a>
            <a class="dropdown-item "
              href="https://htmlstream.com/preview/front-dashboard-v2.0/apps-file-manager.html">File Manager</a>
          </div>
        </li> --}}
        <!-- End Apps -->

        {{-- <li class="nav-item">
          <a class="nav-link " href="index.html">
            <i class="bi-grid-1x2 dropdown-item-icon"></i> Layouts
          </a>
        </li> --}}

        <li class="nav-item">
          <a class="nav-link " href="https://htmlstream.com/preview/front-dashboard-v2.0/documentation/index.html"
            data-placement="left">
            <i class="bi-book dropdown-item-icon"></i> Bantuan
          </a>
        </li>
      </ul>

    </div>
    <!-- End Collapse -->
  </nav>
</div>