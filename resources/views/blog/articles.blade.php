@extends('layouts.layout')

@section('content')
<h1>Liste des articles</h1>

@forelse($articles as $article)
<article class="card">
    <h2>
        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
    </h2>

    <p class="meta">Publié le {{ $article->created_at->format('d/m/Y') }}</p>

    @if($article->author)
        <p class="meta">Par {{ $article->author->name }}</p>
    @endif
</article>
@empty
<p class="empty">Aucun article n'a été trouvé</p>
@endforelse
@endsection
