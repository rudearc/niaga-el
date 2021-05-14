<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <div class="container">
              <a class="navbar-brand" href="/">Niaga-el</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="mr-auto navbar-nav"></ul>
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ URL::to('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Produk</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('kategori') }}">Kategori</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('kontak') }}">Kontak</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('about') }}">Tentang Kami</a>
                  </li>
                  @guest
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @if (Route::has('login'))
                      <li class="nav-item dropdown">
                          <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif
                  
                  @if (Route::has('register'))
                      <li class="nav-item dropdown">
                          <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
                    </ul>
                  </li>
                  
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>
          
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
          
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
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
