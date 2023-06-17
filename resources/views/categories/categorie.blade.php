<div class="col-lg-4">
    <div class="sidebar">
        <div class="row">
            <div class="col-lg-12">
                <div class="sidebar-item search">
                    <!-- <form id="search_form" name="gs" method="GET" action="#">
                        <input type="text" name="q" class="searchText" placeholder="type to search..."
                            autocomplete="on">
                        <button class="btn btn-outline-success"><i class="fa fa-search"></i></button>
                    </form> -->
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Rechercher un article"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                        <h2>Nos produits</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <li><a href="#">Ordinateus</a></li>
                            <li><a href="#">Souris</a></li>
                            <li><a href="#">Clavier</a></li>
                            <li><a href="#">Écran LED</a></li>
                            <li><a href="#">Imprimante</a></li>
                            <li><a href="#">Lecteur/Graveur DVD</a></li>
                            <li><a href="#">Carte Graphics Nvidia</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                        <h2>Actualités</h2>
                    </div>
                    <div class="content">
                        <ul>
                            @foreach($articles as $article)
                            <li><a href="{{ $article['url'] }}">
                                    <h5>{{ $article['title'] }}</h5>
                                    <span>{{ $article['publishedAt'] }}</span>
                                </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                        <h2>Autres communauté TIC</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <li><a href="#">- Nature Lifestyle</a></li>
                            <li><a href="#">- Awesome Layouts</a></li>
                            <li><a href="#">- Creative Ideas</a></li>
                            <li><a href="#">- Responsive Templates</a></li>
                            <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                            <li><a href="#">- Creative &amp; Unique</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>