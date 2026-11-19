<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Repositories\ArticleRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = app(ArticleRepository::class)->getAll();
        return view('blog.articles', compact('articles'));
    }

    public function show(int $id): View
    {
        $article = app(ArticleRepository::class)->getById($id);
        return view('blog.article-details', compact('article'));
    }

    // Degré de maîtrise 2 : affiche le formulaire
    public function create(): View
    {
        return view('blog.form');
    }

    // Degré de maîtrise 2 : enregistre l'article
    // La Form Request est validée AVANT d'entrer dans la méthode :
    // si on arrive ici, les données sont valides.
    public function store(StoreArticleRequest $request): RedirectResponse
    {
        // validated() ne renvoie que les champs déclarés dans rules()
        app(ArticleRepository::class)->create($request->validated());
        return to_route('articles.index');
    }
}
