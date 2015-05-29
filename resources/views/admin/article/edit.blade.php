@extends('admin/layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit: {!! $article->title !!}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">


            {!! Form::model($article, ['method' => 'PATCH', 'action' => ['Admin\AdminArticleController@update', $article->id]]) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Body') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Add article', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop