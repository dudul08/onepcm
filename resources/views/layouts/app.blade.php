<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ONEPCM') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <title>ONEPCM</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/effet.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fonts/remixicon.css') }}">

</head>
<body>
<div>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="{{ route('accueil') }}">{{ config('app.name', 'ONEPCM') }} </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                @auth
                    @can('viewLink',\App\Enfant::class)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('bonspoints.index') }}">Gérer les bons points </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('bonspoints.index') }}">Voir les bons points </a>
                        </li>
                    @endcan

                    @can('viewLink',\App\Enfant::class)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('enfants.index') }}">Gérer les enfants</a>
                        </li>
                    @endcan
                    @can('viewLink',\App\Responsable::class)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('responsables.index') }}">Gérer les parents</a>
                        </li>
                    @endcan
                    @can('viewLink',\App\Tache::class)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('taches.index') }}">Gérer les tâches</a>
                        </li>
                    @endcan
                    @can('viewLink',\App\CategorieTache::class)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categoriestaches.index') }}">Gérer les catégories
                                des
                                tâches</a>
                        </li>
                    @endcan
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('S\'enregister') }}</a>
                        </li>
                    @endif
                @else
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
{{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >--}}
                    <li class="nav-item">
                        <a class="nav-link">
                            {{ Auth::user()->prenom }} <span class="caret"></span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Se déconnecter') }}
                        </a>
                    </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>

{{--                        </a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}

{{--                        </div>--}}
{{--                    </li>--}}
                @endguest
            </ul>
        </div>
    </nav>
</div>


<div class="container">
    @yield('content')
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="{{ asset('/js/app.js') }}"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

</body>
</html>
