<?php

namespace App\Repositories;

use App\Models\Article;
use Illuminate\Support\Collection;

class ArticleRepository
{
    public function getAll(): Collection
    {
        // with('author') : charge l'auteur de chaque article (degré de maîtrise 1)
        return Article::with('author')->get();
    }

    public function getById(int $id): Article
    {
        // findOrFail : renvoie une 404 si l'article n'existe pas
        return Article::with('author')->findOrFail($id);
    }

    public function create(array $data): Article
    {
        return Article::create($data);
    }
}
