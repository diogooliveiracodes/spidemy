<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nview - Sua escola online</title>

    <!-- Scripts -->
    <script src="{{URL::asset('js/app.js')}}" defer></script>
    <script src="/js/app.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{URL::asset('css/app.css')}}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link href="/css/nucleo.css" rel="stylesheet">

    {{-- fontawsome --}}
    <script src="https://kit.fontawesome.com/9f90449050.js" crossorigin="anonymous"></script>

</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/"> <img src="/img/logo.png" alt="" style="height: 40px"> </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        @guest
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Entrar</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Cadastrar</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('home') }}">Aulas</a></li>
                            
                            <li class="nav-item dropdown ml-2">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Sair <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Confirmar Saída') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

<style scoped>
    .nav-item:hover{
        color: red;
    }
</style>

</html>
