@extends('layouts.app')

@section('content')

<!-- Page Header-->
<header class="masthead" style="background-image: url({{asset('Aassets/img/about-bg.jpg')}})">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>A Propos de Nous</h1>
                    <span class="subheading">C'est maintenant vous allez nous connaitre.</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>
                    Bienvenue dans l'univers de notre entreprise spécialisée dans la maintenance informatique et la
                    vente d'ordinateurs. Nous sommes une entreprise dynamique et innovante qui propose des formations de
                    qualité en maintenance informatique pour les particuliers et les professionnels.

                    Nous sommes conscients de l'importance de la maintenance informatique pour le bon fonctionnement de
                    votre entreprise. C'est pourquoi nous mettons à votre disposition notre savoir-faire et notre
                    expertise pour vous offrir des services de qualité adaptés à vos besoins. Que ce soit pour une
                    intervention ponctuelle ou un contrat de maintenance, nous sommes là pour répondre à toutes vos
                    demandes.

                    Nous sommes également spécialisés dans la vente d'ordinateurs, et nous proposons une large gamme de
                    produits adaptés à tous les besoins et tous les budgets. Nous travaillons avec les meilleures
                    marques du marché pour vous offrir des produits fiables et performants.

                    Chez nous, la satisfaction de nos clients est notre priorité absolue. Nous sommes à l'écoute de vos
                    besoins et nous mettons tout en œuvre pour vous offrir des services de qualité. Nos techniciens sont
                    hautement qualifiés et expérimentés pour vous garantir une intervention rapide et efficace.
                <p>
                    N'hésitez pas à nous contacter pour en savoir plus sur nos services et nos produits. Nous sommes là
                    pour répondre à toutes vos questions et vous accompagner dans tous vos projets informatiques.
                    Nous vous souhaitons bon aventure sur notre blog et au plaisir de vous revoir !!!
                </p>
                </p>
            </div>
        </div>
    </div>
</main>

<!-- Footer-->
@include('footers.footerpage')

@endsection