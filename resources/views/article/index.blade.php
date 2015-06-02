@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Home page</div>

                    <div class="panel-body">
                        @foreach($articles as $article)
                            <article>
                                <a href="{{ url('article/' . $article->slug) }}"><h2>{{ $article->title }}</h2></a>
                                <p>{{ str_limit($article->body, 200, '...') }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop