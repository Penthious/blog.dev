@extends('layouts.master')

@section('content')
    <div class="container blogHolder text-center">
        <div class="blog-header">
        <h1>{{{$post->title}}}</h1>
        <p>
            {{{$post->body}}}
        </p>
</div>
</div>
@endsection
