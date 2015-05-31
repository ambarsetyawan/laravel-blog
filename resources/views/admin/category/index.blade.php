@extends('admin/layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Categories</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <a class="btn-create" href="{{ route('admin.category.create') }}">
                <button class="btn btn-primary">Create</button>
            </a>
            @if(count($categories))
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10%">
                                {!! Form::open(['method' => 'GET', 'url' => 'admin/category/' . $category->id .
                                '/edit']) !!}
                                <button type="submit" class="btn btn-sm btn-default adm-btn"><i
                                            class="fa fa-pencil"></i></button>
                                {!! Form::close() !!}
                                {!! Form::open(['method' => 'DELETE', 'url' => 'admin/category/' . $category->id]) !!}
                                <button type="submit" class="btn btn-sm btn-default adm-btn"><i class="fa fa-trash"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            @else
                <h3>Categories not found</h3>
            @endif
        </div>
    </div>

@stop