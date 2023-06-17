<form action="#" method="PUT">

    <div class="row mb-3">
        <label for="titre" class="col-md-2 col-form-label text-md-end">{{ __('Titre') }}</label>

        <div class="col-md-8">
            <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre"
                value="{{ old('titre') }}" required autocomplete="titre" autofocus>

            @error('titre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>



    <div class="row mb-3">
        <label for="description" class="col-md-2 col-form-label text-md-end">{{ __('Contenu') }}</label>

        <div class="col-md-8">
            <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                rows="10" name="description" value="{{ old('description') }}" required autocomplete="description"
                autofocus style="width:100%;height:100%;"></textarea>

            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="row mb-3">
        <label for="image" class="col-md-2 col-form-label text-md-end">{{ __('Image') }}</label>

        <div class="col-md-8">
            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                value="{{ old('image') }}" autocomplete="image" autofocus>

            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>


    <div class="row mb-0">
        <div class="col-md-10 offset-md-2">
            <button type="submit" class="btn btn-primary">
                {{ __('Créer Ce Post') }}
            </button>
        </div>
    </div>


</form>