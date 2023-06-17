@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background-color:bisque;">
                    <h2>{{ __('Modifier Mes Informations') }}</h2>
                </div>

                <div class="card-body">

                    <form method="post" action="{{ route('profile.update',['user'=>$pseudo])}}"
                        enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" name="_method" value="PUT">

                        <div class="row mb-3">
                            <label for="image_profile"
                                class="col-md-2 col-form-label text-md-end"><b>{{ __('Image') }}</b></label>

                            <div class="col-md-8">
                                <input id="image_profile" type="file"
                                    class="form-control @error('image_profile') is-invalid @enderror"
                                    name="image_profile" value="{{ old('image_profile') }}">

                                @error('image_profile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="profession"
                                class="col-md-2 col-form-label text-md-end"><b>{{ __('Profession') }}</b></label>

                            <div class="col-md-8">
                                <input id="profession" type="text"
                                    class="form-control @error('profession') is-invalid @enderror" name="profession"
                                    value="{{ $pseudo->profile->profession }}" autocomplete="profession" autofocus>

                                @error('profession')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="numero" class="col-md-2 col-form-label text-md-end">{{ __('Numéro') }}</label>

                            <div class="col-md-8">
                                <input id="numero" type="text"
                                    class="form-control @error('numero') is-invalid @enderror" name="numero"
                                    value="{{ $pseudo->profile->numero }}" autocomplete="numero">

                                @error('numero')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="adresse"
                                class="col-md-2 col-form-label text-md-end">{{ __('Addresse') }}</label>

                            <div class="col-md-8">
                                <input id="adresse" type="text"
                                    class="form-control @error('adresse') is-invalid @enderror" name="adresse"
                                    value="{{ $pseudo->profile->adresse }}" autocomplete="adresse">

                                @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="lien_reseau"
                                class="col-md-2 col-form-label text-md-end">{{ __('Lien Réseau') }}</label>

                            <div class="col-md-8">
                                <input id="lien_reseau" type="text"
                                    class="form-control @error('lien_reseau') is-invalid @enderror" name="lien_reseau"
                                    value="{{ $pseudo->profile->lien_reseau }}" autocomplete="lien_reseau">

                                @error('lien_reseau')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Mettre à jour') }}
                                </button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

</div>

@endsection