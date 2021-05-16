<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
