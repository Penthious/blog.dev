@extends('layouts.master')
@section('content')

    <div class="mainHolder">

    <div class="container blogHolder text-center">
        <div class="blog-header">
            @if ($edit)
                @if (Session::has('errorMessage'))
                    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
                @endif
                <h1>Blog Edit</h1>
                {{Form::model($post, ['action'=>['PostsController@update', $post->id], 'method' => 'put'])}}
                @else
                    <h1>Blog Creation</h1>
                    {{Form::open(['action'=>'PostsController@store', 'method' => 'post'])}}
            @endif
                        <div class="form-group">
                            {{ Form::label('title', 'Blog Title') }}

                            {{ Form::text('title', null, [ 'class'=>"form-control text-center"]) }}
                            @if ($errors->has('title'))
                                {{ $errors->first('title', '<span class="help-block errorsColor">:message</span>') }}
                            @endif
                        </div>
                            {{ Form::label('body', 'Blog Content') }}
                            {{ Form::textarea('body', null, [ 'class'=>"form-control", 'rows'=>"5"])}}
                            @if ($errors->has('body'))
                                {{ $errors->first('body', '<span class="help-block errorsColor">:message</span>') }}
                            @endif
                </div>
                <button type="submit" name="button">Save</button>
            {{ Form::close() }}

@endsection
