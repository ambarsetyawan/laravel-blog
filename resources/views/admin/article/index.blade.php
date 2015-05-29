@extends('admin/layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Content</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <a class="btn-create" href="{{ url('admin/article/create') }}">
                <button class="btn btn-primary">Create</button>
            </a>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="20%">Title</th>
                    <th>Body</th>
                    <th width="10%">Category</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->body }}</td>
                        <td>Category</td>
                        <td>
                            {!! Form::open(['method' => 'get', 'url' => 'admin/article/' . $article->id . '/edit']) !!}
                            <button type="submit" class="btn btn-default">Edit</button>
                            {!! Form::close() !!}


                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop