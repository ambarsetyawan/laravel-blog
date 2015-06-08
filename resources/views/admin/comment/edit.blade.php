@extends('app')

@section('content')

    {!! Form::model($comment, ['method' => 'PATCH', 'action' => ['CommentController@update',
    $comment->id]]) !!}
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

@stop