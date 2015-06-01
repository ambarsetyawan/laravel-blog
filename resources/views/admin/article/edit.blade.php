@extends('admin/layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit: {!! $article->title !!}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @include('errors/list')
            {!! Form::model($article, ['method' => 'patch', 'url' => action('Admin\AdminArticleController@update', $article)]) !!}
                @include('admin/article/_form', ['submitText' => 'Update'])
            {!! Form::close() !!}
        </div>
    </div>
@stop