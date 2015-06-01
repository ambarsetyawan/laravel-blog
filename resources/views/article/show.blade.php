@extends('app')

@section('content')

    <article>
        <h1>{{ $article->title }}</h1>
        <span>Posted {{ $article->created_at }}</span>
        <p>{{ $article->body }}</p>
    </article>

@stop