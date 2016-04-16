@extends('layouts.master')

@section('content')
    <div class="container blogHolder text-center">
        <div class="blog-header">
                <h1>{{{$post->title}}}</h1>
            <p>
                {{{$post->body}}}
            </p>
            @if(Auth::check())
                @if (Auth::user()->role == 'admin')
                    <a href="{{{action('PostsController@edit',$post->id)}}}">Edit form</a>
                    {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                @endif
            @endif
        </div>
    </div>
@endsection
