@extends('layouts.base')

@section('content')

    @if($errors->any())
        <div class="alert alert-danger w-50 mx-auto mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form action="{{ route('photo_store') }}" method="post" class="mx-auto mt-5 w-50" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="choisissez un nom">
              </div>
            <div class="input-group">
                <input type="file" class="form-control" name="file" id="file" aria-describedby="file" aria-label="Upload">
              </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>    
        </form>
    </div>
    

    
@endsection