@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('content')
    <h2>Articles</h2>
    @if($articles)
    @foreach($articles as $article)
    <p>{{$article['title']}}</p>
    <p>{{$article['body']}}</p>
    @endforeach
    @else
    <p>Pas d'articles disponible</p>
    @endif     
@endsection
