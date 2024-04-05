<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>M&C Haciendas</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('') }}assets/css/feather.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/typicons.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('') }}assets/css/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('') }}assets/img/icono-logo.svg" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
  <link href="{{ asset('') }}assets/css/style-catalog.css" rel="stylesheet" />
  
  <style>
    .sidebar {
    background-color:white; /* Cambia 'blue' al color que desees */
    /* Otros estilos que desees aplicar */
}
  </style>
</head>

<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row border-bottom">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="javascript:;">
            <img src="{{ asset('') }}assets/img/icono-logo.svg" alt="logo"/>
          </a>
          <a class="navbar-brand brand-logo-mini" href="javascript:;">
            <img src="{{ asset('') }}assets/img/icono-logo.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          {{-- <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Buscar aqui" title="Buscar aqui">
            </form>
          </li> --}}
          {{-- <li class="nav-item">
            <form class="search-form" action="{{ route('') }}" method="GET">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Buscar aquí" title="Buscar aquí" name="search">
            </form>
          </li> --}}
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ asset('') }}assets/img/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{ asset('') }}assets/img/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
                <p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
              </div>
              <a class="dropdown-item" href="{{ route('person.show') }}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Mi Perfil </a>
              <a class="dropdown-item" href="{{ route('config.show') }}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> Configuracion </a>
              @role('client')
              <a class="dropdown-item" href="{{ route('fields.show') }}"><i class="dropdown-item-icon mdi mdi-houzz text-primary me-2"></i> Mis Campos </a>
              @endrole
              @role('consignee')
              <a class="dropdown-item" href="{{ route('vehicles.show') }}"><i class="dropdown-item-icon mdi mdi-car text-primary me-2"></i> Mis Vehiculos </a>
              @endrole
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Cerrar Sesion</a>
            </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
        </ul>
        <div class="tab-content" id="setting-content">
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">Inicio</li>
          @role('admin')
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#inicio" aria-expanded="false" aria-controls="inicio">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">Gestion de Usuarios</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="inicio">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('users') }}">Usuarios</a></li>
              </ul>
            </div>
          </li>
          @endrole
          @role('client')
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#publicaciones" aria-expanded="false" aria-controls="informacion-relevante">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Publicaciones</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="publicaciones">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('catalog.show') }}">Catalogo</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('publish') }}">Publicar</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('my-posts.show') }}">Mis publicaciones </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#compras" aria-expanded="false" aria-controls="informacion-relevante">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Compras</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="compras">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('buy-client.show')}}">Resumen</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('requests.show') }}">Solicitudes</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ventas" aria-expanded="false" aria-controls="informacion-relevante">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Ventas</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ventas">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('sell-client.show') }}">Resumen</a></li>
                </ul>
            </div>
          </li>
          @endrole
          @role('consignee')
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#gestion" aria-expanded="false" aria-controls="informacion-relevante">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Gestion</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="gestion">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('postAsignate.show') }}">Publicaciones Asignadas</a></li>           
                <li class="nav-item"> <a class="nav-link" href="{{ route('request.show') }}">Solicitudes Confirmadas</a></li> 
                <li class="nav-item"> <a class="nav-link" href="{{ route('confirmation.show') }}">Solicitudes Pendientes</a></li> 
                <li class="nav-item"> <a class="nav-link" href="{{ route('sell.show') }}">Ventas</a></li>          
              </ul>
            </div>
          </li>
          @endrole
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-nonnamee float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © {{date('Y')}}.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('') }}assets/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('') }}assets/js/Chart.min.js"></script>
  <script src="{{ asset('') }}assets/js/bootstrap-datepicker.min.js"></script>
  <script src="{{ asset('') }}assets/js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('') }}assets/js/off-canvas.js"></script>
  <script src="{{ asset('') }}assets/js/hoverable-collapse.js"></script>
  <script src="{{ asset('') }}assets/js/template.js"></script>
  <script src="{{ asset('') }}assets/js/settings.js"></script>
  <script src="{{ asset('') }}assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('') }}assets/js/dashboard.js"></script>
  <script src="{{ asset('') }}assets/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
  <script src="{{ asset('') }}assets/js/scripts-catalog.js"></script>
  @yield('javascripts')
  
</body>

</html>
