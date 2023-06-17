<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ZION BLOG') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-stand-blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">

    <link href="{{asset('Acss/styles.css')}}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
.nav-link {
    color: white;
}
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span style="font-size: x-large; color:green; font-weight:bold;">ZION BLOG<span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto d-inline-flex d-inline-block"
                        style="font-weight:bold; margin-right:0px;">
                        <!-- Authentication Links -->

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('Actualités') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('Acceuil') }}</a>
                        </li>

                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Se Connecter') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('S\'inscrire') }}</a>
                        </li>
                        @endif
                        @else

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('article.index')}}"><i class="fa fa-eye"></i>Articles</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('apropos') }}" id="dropdown01"
                                data-bs-toggle="dropdown" aria-expanded="false"><span
                                    style="color: black; font-weight:bolder; ">Services
                                </span></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">

                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{ __('Nos Formations') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{ __('Vente des Ordinateurs') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">{{ __('Maintenance') }}</a>
                                </li>

                            </ul>
                        </li>



                        <!-- Zone Article / Publication -->

                        <!-- Debut -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                                aria-expanded="false"><span style="color: black; font-weight:bolder; "><i
                                        class="fa fa-pen mx-1"></i>Ecrire
                                </span></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('post.creer') }}">Un Post</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('article.create') }}">Un Article</a>
                                </li>

                            </ul>
                        </li>
                        <!-- Fin -->



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('apropos') }}" id="dropdown01"
                                data-bs-toggle="dropdown" aria-expanded="false"><span
                                    style="color: black; font-weight:bolder; ">A Propos
                                </span></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">

                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{route('profile.show',Auth::user()->pseudo)}}">{{ __('Profile') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">{{ __('Contactez-nous') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>


                        @unless(auth()->user()->unreadNotifications->isEmpty())

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('contact') }}" id="dropdown01"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"
                                    style="font-size: 25px; color:black;"></i>
                                <span
                                    style="color:red; font-size:15px;">{{ auth()->user()->unreadNotifications->count()}}</span></a>


                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                @foreach(auth()->user()->unreadNotifications as $notification)
                                <a class="nav-link d-flex text-muted" href="{{ route('post.notification',[
                                            'post'=>$notification->data['idPost'],
                                            'notification'=> $notification->id
                                    ]) }}">
                                    <span style="font-size: 12px;">{{$notification->data['userComment']}} a commenté
                                        <span
                                            style="color:coral; font-weight:bold;">{{$notification->data['titrePost']}}</span></span>
                                </a>
                                <hr style="width:100%;">
                                @endforeach
                            </div>


                            <ul class="dropdown-menu" aria-labelledby="dropdown01">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Se Déconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>

                        @endunless


                        @endguest
                    </ul>

                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>


        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        <script src="{{asset('assets/js/owl.js')}}"></script>
        <script src="{{asset('assets/js/slick.js')}}"></script>
        <script src="{{asset('assets/js/isotope.js')}}"></script>
        <script src="{{asset('assets/js/accordions.js')}}"></script>
        <script src="{{asset('Ajs/scripts.js')}}"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    </div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/642abf944247f20fefe9893d/1gt3fonuf';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    @yield('scripts')
</body>

</html>