@extends('layouts.app')

@section('content')

<!-- Page Header-->
<header class="masthead" style="background-image: url({{asset('Aassets/img/home-bg.jpg')}})">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>ZION Blog</h1>
                    <span class="subheading">Bienvenue sur notre blog dédié aux passionnés d'informatique ! Vous y
                        trouverez des astuces, des conseils, des tutoriels et des analyses sur les dernières tendances
                        et technologies du monde de l'informatique.</span>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center">

                <a class="btn btn-success" href="{{ route('login') }}">
                    <h5>Nous Rejoindre → </h5>
                </a>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            @foreach($articles as $article)
            <div class="post-preview mb-3">
                <a href="{{ $article['url'] }}">
                    <h4>{{ $article['title']}}</h4>
                    <img src="{{ $article['image']}}" width="600" height="400" alt="">
                    <p>{{ $article['description']}}</p>
                </a>

                <p class="post-meta">
                    Posté par {{ $article['source']['name']}} le
                    <span class="text-decoration-none">{{ $article['publishedAt'] }}</span>
                </p>
            </div>
            @endforeach
            <!-- Divider-->
            <hr class="my-4" />

            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase"
                    href="{{route('home')}}">Tous Les Posts → </a></div>
        </div>
    </div>
</div>

<!-- Footer-->
@include('footers.footerpage')

@endsection