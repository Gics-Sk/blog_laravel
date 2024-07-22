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
    @can('create', 'App\Models\Article')
    <a href="/articles/create">Créer un article</a>
    @endcan
    @guest
    <a href="{{ route('register') }}">Créer un compte</a>
    <a href="{{ route('login') }}">Login</a>
    @endguest
    @auth
    <a href="{{ route('profile') }}">Votre profil</a>
    @include('messages.success')
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <input type="submit" value="Se déconnecter">
    </form>
    @endauth
    @yield('content')


</body>

</html>