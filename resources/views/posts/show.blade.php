@extends('layouts.master')

@section('content')


<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-md-6 text-start">
                            @can('update',$post)
                            <a class="btn btn-outline-warning" href="{{ route('post.edit',$post)}}">Editer</a>
                            @endcan
                        </div>
                        <div class="col-md-6 text-end">
                            @can('delete',$post)
                            <a class="btn btn-outline-danger" href="{{ route('post.delete',$post)}}}">Retirer</a>
                            @endcan
                        </div>
                    </div>
                    @if(auth()->user()->id==$post->user_id)
                    <hr style="width:100%;">
                    @endif
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{asset('storage/'.$post->image)}}" height="450" alt="">
                                </div>
                                <div class="down-content">
                                    <span> <a href="{{route('profile.show',Auth::user()->pseudo)}}"
                                            style="color:coral;"> Auteur :
                                            {{ $post->user->pseudo }} </a></span>
                                    <span>
                                        <h4>{{$post->titre}}</h4>
                                    </span>


                                    <p>
                                        {{ $post->description }}
                                    </p>


                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-4">
                                                <ul class="post-tags">
                                                    <a href="#" class="text-decoration-none"><i class="fa fa-heart"
                                                            style="color: coral; font-size : 20px;"></i> <span
                                                            style="color:coral;">1000<span> </a>
                                                </ul>
                                            </div>
                                            <div class="col-4">
                                                <ul class="post-share text-center">
                                                    <a href="{{ route('post.show',$post->id) }}"
                                                        class="text-decoration-none">
                                                        <i class="fa fa-comment"
                                                            style="color: coral; font-size : 20px;"></i> <span
                                                            style="color:coral;">{{ $post->commentaires->count()}}<span>
                                                    </a>
                                                </ul>
                                            </div>
                                            <div class="col-4">
                                                <ul class="post-share">
                                                    <a href="#" class="text-decoration-none"><i class="fa fa-share-alt"
                                                            style="font-size: 20px; color: coral;"></i>
                                                        <span style="color:coral;" class="text-decoration-none">

                                                        </span></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-12">
                            <div class="sidebar-item submit-comment">
                                <div class="sidebar-heading">
                                    <h2>Votre commentaire</h2>
                                </div>
                                <div class="content">
                                    <form action="{{route('commentaire.store',$post->id)}}" method="POST">
                                        @csrf
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <textarea rows="6" id="commentaire" type="text"
                                                        placeholder="Ecrivez votre commentaire"
                                                        class="form-control @error('commentaire') is-invalid @enderror"
                                                        name="commentaire" autocomplete="commentaire"
                                                        autofocus>{{ old('commentaire') }}</textarea>
                                                </fieldset>
                                                @error('commentaire')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit"
                                                        class="main-button">Posté</button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>






                        <div class="col-lg-12">
                            <div class="sidebar-item comments">
                                <div class="sidebar-heading">
                                    <h2>{{ $post->commentaires->count()}} commentaire(s)</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        @foreach($post->commentaires as $posts)
                                        <li>
                                            <div class="author-thumb">
                                                <a href="{{route('profile.show',$posts->user->pseudo)}}"
                                                    style="text-decoration: none;">
                                                    <img src="{{ asset('storage/'.$posts->user->profile->image_profile)}}"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="right-content">

                                                <h4>
                                                    <a href="{{route('profile.show',$posts->user->pseudo)}}"
                                                        style="text-decoration: none; color:black;">
                                                        {{$posts->user->pseudo}}
                                                    </a><span>{{$posts->created_at}}</span>
                                                </h4>
                                                <p>{{$posts->commentaire}}</p>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
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