@extends('app')

@section('content')
    @foreach($articles as $article)
    <article>
        <a href="{{ url('article/' . $article->slug) }}"><h2>{{ $article->title }}</h2></a>
        <p>{{ str_limit($article->body, 200, '...') }}</p>
    </article>
    @endforeach
@stop