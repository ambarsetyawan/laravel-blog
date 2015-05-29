@extends('app')

@section('content')
    @foreach($articles as $article)
    <article>
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->body }}</p>
    </article>
    @endforeach
@stop