@extends('layouts.master')

@section('content')

<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        @foreach($all_post as $posts)
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{asset('storage/'.$posts->image)}}" height="450" alt="">
                                </div>
                                <div class="down-content">
                                    <span> <a href="{{route('profile.show',Auth::user()->pseudo)}}"
                                            style="color:coral;"> Auteur :
                                            {{ $posts->user->pseudo }} </a></span>
                                    <a href="{{ route('post.show',$posts->id) }}">
                                        <h4>{{$posts->titre}}</h4>
                                    </a>

                                    <p>
                                        {{Str::limit($posts->description,50,'...')}} <a
                                            href="{{ route('post.show',$posts->id) }}"
                                            class="text-decoration-none"><i>Voir
                                                plus</i></a>
                                    </p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-4">
                                                <ul class="post-tags ">
                                                    <form method="POST" class="d-flex align-items" id="form-js"
                                                        action="{{route('post.like')}}" class="text-decoration-none">
                                                        <input type="hidden" id="post-id-js" value="{{ $posts->id}}">
                                                        <i class="fa fa-heart"
                                                            style="color: coral; font-size : 20px;"></i> <span
                                                            style="color:coral;">{{$posts->likes->count()}}<span>
                                                    </form>
                                                </ul>
                                            </div>
                                            <div class="col-4">
                                                <ul class="post-share text-center">
                                                    <a href="{{ route('post.show',$posts->id) }}"
                                                        class="text-decoration-none">
                                                        <i class="fa fa-comment"
                                                            style="color: coral; font-size : 20px;"></i> <span
                                                            style="color:coral;">{{App\Models\Commentaires::where('commentable_id',$posts->id)->count()}}<span>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="col-4">
                                                <ul class="post-share">
                                                    <a href="#" class="text-decoration-none"><i class="fa fa-share-alt"
                                                            style="font-size: 20px; color: coral;"></i>
                                                        <span style="color:coral;" class="text-decoration-none">
                                                            Facebook
                                                        </span></a>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <ul class="post-info">
                                                <li><a href="#">Crée le {{$posts->created_at}}</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach


                        <div class="col-lg-12">
                            <div class="text-decoration-none">
                                {{$all_post->links('vendor.pagination.bootstrap-5')}}
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


@include('footers.footer_user_connect')

@endsection