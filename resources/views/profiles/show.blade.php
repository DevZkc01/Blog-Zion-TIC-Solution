@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background-color:bisque;">
                    <h2>{{ __('Vos Informations') }}</h2>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="profil justify-content-center mx-auto"
                                style="width:200px; height:200px;border-radius:50%; border: 1px black solid; overflow:hidden;">
                                <img src="{{ $user->profile->getImage() }}" alt="" srcset=""
                                    style="width:200px; height:200px;">
                            </div>
                        </div>

                        <div class="col-md-8 text-center">
                            <div class="d-flex mt-4 justify-content-center align-items-baseline">
                                <div class="h4 pt-2">{{ $user->pseudo}}_-_Officiel</div>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <button href="#" class="btn btn-sm btn-primary">
                                    <h4>Abonné(e)</h4>
                                </button>
                            </div>

                            <div class="d-flex mt-3 justify-content-center">
                                <div class="mr-3">
                                    <b>{{ $user->post->count() }}</b> publications
                                </div>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <div class="mr-3">
                                    <b>200</b> abonné(es)
                                </div>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <div class="mr-3">
                                    <b>400</b> abonnement(s)
                                </div>
                            </div>

                            <div class="mt-3 justify-content-center">
                                <div>
                                    <b>
                                        <p>{{ $user->profile->profession }}</p>
                                    </b>
                                </div>
                                <div>
                                    <b>
                                        <p>{{ $user->profile->numero }}</p>
                                    </b>
                                </div>
                                <div>
                                    <b>
                                        <p>{{ $user->profile->adresse }}</p>
                                    </b>
                                </div>
                                <div>
                                    <b>
                                        <p>Description</p>
                                    </b>
                                </div>

                                @if ($user->pseudo == Auth::user()->pseudo)
                                <div>
                                    <a href="{{ route('profile.edit',$user->pseudo) }}"
                                        class="btn btn-outline-secondary">
                                        Modifer mes informations
                                    </a>
                                </div>
                                @endif

                                <div> <a href="{{ $user->profile->lien_reseau}}">{{ $user->profile->lien_reseau}}</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>

@endsection