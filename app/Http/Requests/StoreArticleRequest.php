<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Degré de maîtrise 2 : la validation est sortie du contrôleur dans une Form Request.
// Si la validation échoue, Laravel redirige automatiquement vers le formulaire
// avec les erreurs ($errors) et les anciennes valeurs (old()).
class StoreArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Pas d'authentification dans cet exercice : tout le monde peut créer un article.
        return true;
    }

    public function rules(): array
    {
        return [
            // max:255 car la colonne "title" est un string (VARCHAR 255) en base
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Le titre est obligatoire.',
            'title.max' => 'Le titre ne peut pas dépasser 255 caractères.',
            'content.required' => 'Le contenu est obligatoire.',
        ];
    }
}
