@extends('layout')

@section('content')

<h2>{{ $question->title }}</h2>
<p>{{ $question->content }}</p>
<small>Posté par {{ $question->user->name }}</small>

<hr>

<h4>Réponses</h4>

@forelse($question->responses as $response)
    <div class="card mb-2">
        <div class="card-body">
            <p>{{ $response->content }}</p>
            <small>Par {{ $response->user->name }}</small>
        </div>
    </div>
@empty
    <p>Aucune réponse pour le moment.</p>
@endforelse

<hr>

<h4>Ajouter une réponse</h4>

<form method="POST" action="{{ route('responses.store') }}">
    @csrf
    <input type="hidden" name="question_id" value="{{ $question->id }}">

    <textarea name="content" class="form-control mb-2"></textarea>

    <button type="submit" class="btn btn-primary">
        Envoyer
    </button>
</form>

@endsection
