@extends('admin/layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create article</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            @endif

                {!! Form::open(['url' => 'admin/article']) !!}
                    @include('admin/article/_form', ['submitText' => 'Add'])
                {!! Form::close() !!}
        </div>
    </div>
@stop