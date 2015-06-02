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
                                <a href="{{ url('article/' . $article->id) }}"><h2>{{ $article->title }}</h2></a>

                                <hr/>
                                <p><i class="fa fa-calendar"></i> Posted on {{ $article->created_at }} in <a href="">{{ $article->category->name }}</a></p>

                                <p>{{ str_limit($article->body, 200, '...') }}</p>

                                <a href="{{ url('article/' . $article->id) }}"><button class="btn btn-default">Read more</button></a>
                            </article>
                            <hr/>
                        @endforeach
                        {!! $articles->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop