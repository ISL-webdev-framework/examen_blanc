<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['name' => 'Ada Lovelace', 'email' => 'ada.lovelace@example.com'],
            ['name' => 'Alan Turing', 'email' => 'alan.turing@example.com'],
            ['name' => 'Grace Hopper', 'email' => 'grace.hopper@example.com'],
            ['name' => 'Linus Torvalds', 'email' => 'linus.torvalds@example.com'],
            ['name' => 'Margaret Hamilton', 'email' => 'margaret.hamilton@example.com'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
