@extends('layouts.master')

@section('content')


<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">

                    <div class="row">


                        <div class="col-lg-12">
                            <div class="sidebar-item comments">
                                <div class="sidebar-heading">
                                    <h2>{{App\Models\Article::count()}} Articles publiés déjà</h2>
                                </div>

                                @foreach($article as $articles)
                                <div class="content mx-auto">
                                    <h1 class="text-center mb-4">{{$articles->header}}</h1>
                                    <p class=" text-center">
                                        {!!$articles->articlesWrite!!}
                                    </p>
                                </div>
                                @endforeach

                                <div class="row">
                                    {{$article->links('vendor.pagination.bootstrap-5')}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-lg-4">



            </div>



        </div>
    </div>
</section>


@endsection