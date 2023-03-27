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
                Cylinders
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('cylinders.index') }}">List</a></li>
                <li><a class="dropdown-item" href="{{ route('cylinders.create') }}">Create</a></li>
              </ul>
            </li>
            <!-- Schedules -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Schedules
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('schedules.index') }}">List</a></li>
                <li><a class="dropdown-item" href="{{ route('schedules.create') }}">Create</a></li>
              </ul>
            </li>
            <!-- Maintances -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Maintances
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('maintances.index') }}">List</a></li>
                <li><a class="dropdown-item" href="{{ route('maintances.create') }}">Create</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>
</html>
