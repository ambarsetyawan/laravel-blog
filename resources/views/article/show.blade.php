@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Single page</div>

                    <div class="panel-body">

                        <article>
                            <h1>{{ $article->title }}</h1>
                            <p class="lead"><i class="fa fa-user"></i> by <a href=""> {{ $article->user->name }}</a>
                            </p>
                            <hr/>
                            <p><i class="fa fa-calendar"></i> Posted on {{ $article->created_at }} in <a href="">{{ $article->category->name }}</a></p>
                            <hr/>
                            <p>{{ $article->body }}</p>
                            <hr/>
                            <p><i class="fa fa-tags"></i> Tags: <a href=""><span class="badge badge-info">Bootstrap</span></a> <a href=""><span class="badge badge-info">Web</span></a> <a href=""><span class="badge badge-info">CSS</span></a> <a href=""><span class="badge badge-info">HTML</span></a></p>

                        </article>
                        <hr/>

                        <!-- the comments -->
                        @if(count($comments))
                            @foreach($comments as $comment)
                                <h3><i class="fa fa-comment"></i> {{ $comment->name }} says:
                                    <small> {{ date('G:i F, d, Y', strtotime($comment->created_at)) }}</small>
                                </h3>
                                <p>{{ $comment->message }}</p>
                            @endforeach
                        @else
                            <p>Comments not found</p>
                        @endif


                        <hr/>
                        <!-- the comment box -->
                        <div class="well">
                            <h4><i class="fa fa-paper-plane-o"></i> Leave a Comment:</h4>

                            {!! Form::open(['url' => '/comment/' . $article->id]) !!}
                                <div class="form-group">
                                    {!! Form::label('name', 'Name') !!}
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('message', 'Message') !!}
                                    {!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => '3']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
                                </div>
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop