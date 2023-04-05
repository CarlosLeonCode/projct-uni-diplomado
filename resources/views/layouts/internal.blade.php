<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <div>
    <nav class="navbar bg-primary navbar-expand-lg bg-body-tertiary p-2 bg-dark internal-nav">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">OMC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <!-- Cylinders -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cilindros
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('cylinders.index') }}">Lista</a></li>
                <li><a class="dropdown-item" href="{{ route('cylinders.create') }}">Crear</a></li>
              </ul>
            </li>
            <!-- Maintances -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mantenimentos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('maintances.index') }}">Lista</a></li>
                <li><a class="dropdown-item" href="{{ route('maintances.create') }}">Crear</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4 internal-layout-root">
      @yield('content')
    </main>
    <footer id="footer" class="sticky-bottom w-100">
      <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>OMC</span></strong>. Todos los derechos reservados
          </div>
          <div class="credits">
            Proyecto - Diplomado Desarrollo Web
          </div>
        </div>
        <!-- Media  -->
        <!-- <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
          <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" class="google-plus"><i class="fa-brands fa-skype"></i></a>
          <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
        </div> -->
      </div>
    </footer>
  </div>
</body>
</html>
