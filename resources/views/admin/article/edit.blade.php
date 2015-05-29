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
                @include('admin/article/_form', ['submitText' => 'Update'])
            {!! Form::close() !!}

            {!! Form::open(['method' => 'delete', 'url' => 'admin/article/'.$article->id]) !!}
                <button type="submit" class="btn btn-danger">Delete</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop