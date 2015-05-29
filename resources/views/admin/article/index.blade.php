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
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
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
                            <a href=""><i class="fa fa-pencil"></i></a> |
                            <a href=""><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop