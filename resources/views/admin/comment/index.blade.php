@extends('admin/layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Comments</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Comment</th>
                    <th>In Article</th>
                    <th>Author</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->message }}</td>
                        <td>ss</td>
                        <td>{{ $comment->name }}</td>
                        <td>{{ $comment->created_at }}</td>
                        <td width="10%">
                            {!! Form::open(['method' => 'GET', 'url' => 'admin/category/' . $comment->id .
                            '/edit']) !!}
                            <button type="submit" class="btn btn-sm btn-default adm-btn"><i
                                        class="fa fa-pencil"></i></button>
                            {!! Form::close() !!}
                            {!! Form::open(['method' => 'DELETE', 'url' => 'admin/category/' . $comment->id]) !!}
                            <button type="submit" class="btn btn-sm btn-default adm-btn"><i class="fa fa-trash"></i>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@stop