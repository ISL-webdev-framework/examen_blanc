<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Examen blanc</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: system-ui, sans-serif; background: #f4f5f7; color: #222; line-height: 1.5; }
        header { background: #1e3a5f; }
        header nav { max-width: 900px; margin: 0 auto; padding: 1rem; display: flex; gap: 1.5rem; align-items: center; }
        header a { color: #fff; text-decoration: none; }
        header a:hover { text-decoration: underline; }
        header .logo { font-weight: bold; font-size: 1.3rem; margin-right: auto; }
        main { max-width: 900px; margin: 2rem auto; padding: 0 1rem; }
        .card { background: #fff; border-radius: 8px; padding: 1.2rem 1.5rem; margin-bottom: 1rem; box-shadow: 0 1px 3px rgba(0, 0, 0, .1); }
        .card h2 { margin: 0 0 .5rem; }
        .meta { color: #666; font-size: .9rem; }
        .empty { color: #666; font-style: italic; }
        a { color: #1e3a5f; }
        label { display: block; font-weight: bold; margin: 1rem 0 .3rem; }
        input, textarea { width: 100%; padding: .5rem; border: 1px solid #ccc; border-radius: 4px; font: inherit; }
        textarea { min-height: 200px; }
        button { margin-top: 1rem; padding: .6rem 1.2rem; background: #1e3a5f; color: #fff; border: none; border-radius: 4px; font: inherit; cursor: pointer; }
        .error { color: #c0392b; font-size: .9rem; margin: .3rem 0 0; }
        footer { text-align: center; color: #888; font-size: .85rem; padding: 2rem 1rem; }
    </style>
</head>
<body>
<header>
    <nav>
        <a href="/" class="logo">Blog</a>
        <a href="/">Accueil</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    Examen blanc – Framework côté serveur
</footer>
</body>
</html>
