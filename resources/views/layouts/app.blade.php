<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ZION BLOG') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="{{asset('aos/aos.css')}}" rel="stylesheet" />
    <link href="{{asset('Acss/styles.css')}}" rel="stylesheet" />
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
                        style="font-weight:bold; margin-right:10px;">
                        <!-- Authentication Links -->


                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">{{ __('Actualités') }}</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('Acceuil') }}</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Nos Formations') }}</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('Vente des Ordinateurs') }}</a>
                        </li>


                        <li class="nav-item"><a class="nav-link" href="{{ route('apropos') }}">{{ __('A Propos') }}</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">{{ __('Contactez-nous') }}</a>
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

                        @endguest
                    </ul>

                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('Ajs/scripts.js')}}"></script>
        <script src="{{asset('/public/aos/aos.js')}}"></script>
        <script>
        AOS.init();
        </script>
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
</body>

</html>