@extends('layouts.layout')

@section('content')
<h1>Ajouter un article</h1>

<div class="card">
    <form method="POST" action="{{ route('articles.store') }}">
        @csrf

        {{-- Degré de maîtrise 2 : old() remet la saisie précédente si la validation échoue,
             @error affiche le message d'erreur du champ --}}
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
        @error('title')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="content">Contenu</label>
        <textarea id="content" name="content">{{ old('content') }}</textarea>
        @error('content')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit">Enregistrer</button>
    </form>
</div>
@endsection
