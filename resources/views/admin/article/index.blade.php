@extends('admin/layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contents</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <a class="btn-create" href="{{ route('admin.article.create') }}">
                <button class="btn btn-primary">Create</button>
            </a>
            @if(count($articles))
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="20%">Title</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->category->name }}</td>
                            <td>{{ $article->created_at }}</td>
                            <td>{{ $article->user->name }}</td>
                            <td width="10%">
                                {!! Form::open(['method' => 'GET', 'url' => 'admin/article/' . $article->id .
                                '/edit']) !!}
                                <button type="submit" class="btn btn-sm btn-default adm-btn"><i
                                            class="fa fa-pencil"></i></button>
                                {!! Form::close() !!}
                                {!! Form::open(['method' => 'DELETE', 'url' => 'admin/article/' . $article->id]) !!}
                                <button type="submit" class="btn btn-sm btn-default adm-btn"><i class="fa fa-trash"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $articles->render() !!}
            @else
                <h3>Articles nor found!</h3>
            @endif
        </div>
    </div>

@stop