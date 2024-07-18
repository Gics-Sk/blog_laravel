<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    </head>
    <body>
        <h1>BLOG</h1>
        <a href="/contact-us">Contactez-nous</a>
        <a href="/about">A propos de nous</a>
<a href="/articles">Articles</a>
<a href="/articles/create">Creer un article</a>
        @yield('content')
        @include('messages.success')

    </body>
</html>