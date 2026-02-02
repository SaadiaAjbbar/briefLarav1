@extends('layout')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="card shadow-lg p-4" style="width: 520px; border-radius: 15px;">
        <h3 class="text-center mb-4 text-success">
            Ajouter une question
        </h3>

        <form method="POST" action="{{ route('questions.store') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-bold">Titre</label>
                <input 
                    type="text" 
                    name="title" 
                    value="{{ old('title') }}"
                    class="form-control form-control-lg" 
                    placeholder="Titre de la question"
                >
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Contenu</label>
                <textarea 
                    name="content" 
                    rows="4"
                    class="form-control form-control-lg" 
                    placeholder="Décrivez votre question ici..."
                >{{ old('content') }}</textarea>
                @error('content')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-success w-100 py-2 mt-2">
                Publier la question
            </button>

            <div class="text-center mt-3">
                <small>
                    <a href="{{ route('questions.index') }}" 
                       class="text-decoration-none text-success fw-bold">
                        ← Retour à la liste des questions
                    </a>
                </small>
            </div>
        </form>
    </div>
</div>
@endsection
