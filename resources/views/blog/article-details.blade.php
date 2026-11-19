@extends('layouts.layout')

@section('content')
<article class="card">
    <h1>{{ $article->title }}</h1>

    <p class="meta">Publié le {{ $article->created_at->format('d/m/Y') }}</p>

    @if($article->author)
        <p class="meta">Par {{ $article->author->name }}</p>
    @endif

    <div>
        {{ $article->content }}
    </div>
</article>

<p><a href="/">← Retour à l'accueil</a></p>
@endsection
