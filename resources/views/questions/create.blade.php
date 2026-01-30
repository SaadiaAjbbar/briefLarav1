@extends('layout')

@section('content')
<h2>Ajouter une question</h2>

<form method="POST" action="{{ route('questions.store') }}">
    @csrf

    <div class="mb-3">
        <label>Titre</label>
        <input type="text" name="title" class="form-control">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label>Contenu</label>
        <textarea name="content" class="form-control"></textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <button class="btn btn-primary">Publier</button>
</form>
@endsection
