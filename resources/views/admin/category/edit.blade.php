@extends('admin/layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit: {{ $category->name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            @include('errors/list')

            {!! Form::model($category, ['method' => 'PATCH', 'action' => ['Admin\AdminCategoryController@update',
            $category->id]]) !!}
            @include('admin/category/_form', ['submitText' => 'Add'])
            {!! Form::close() !!}
        </div>
    </div>

@stop