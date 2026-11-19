<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Table('articles')]
#[Fillable(['title', 'content'])]
class Article extends Model
{
    // Relations
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
