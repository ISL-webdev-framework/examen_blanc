<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Table('authors')]
#[Fillable(['name', 'email'])]
class Author extends Model
{
    // Relations
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
