@extends('layout')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Liste des questions</h2>
    <a href="{{ route('questions.create') }}" class="btn btn-success">+ Question</a>
</div>

@foreach($questions as $question)
<div class="card mb-3">
    <div class="card-body">
        <h5>{{ $question->title }}</h5>
        <p>{{ $question->content }}</p>
        <small>Posté par {{ $question->user->name }}</small>
    </div>
</div>

<form method="POST" action="{{ route('responses.create')}}">
    @csrf
    <input type="hidden" value="{{ $question->id }}" name="question_id">
    <textarea name="content" id=""></textarea>
    <input type="submit" value="envoyer reponse">
</form>

<form method="POST" action="{{ route('questions.favorite', $question->id) }}">
    @csrf
    <button type="submit">
        + Favorite
    </button>
</form>
@endforeach
@endsection