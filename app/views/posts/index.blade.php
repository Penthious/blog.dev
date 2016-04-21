@extends('layouts.master')
@section('css')
    <title>Blog</title>
@stop
@section('content')
    <div class="container blogHolder">
        <div class="blog-header">
            <h1 class="blog-title">Tomas Leffew's blog</h1>
            <p class="lead blog-description">Come along for a great ride!</p>
        </div>
        <div class="row">
            <div class="col-sm-8 blog-main">
                @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title">{{{$post->title}}}</h2>
                        <p>{{{$post->body}}}</p>
                        <a href="{{{ action('PostsController@show' , $post->id) }}}"class="btn btn-danger" type="submit" name="button">View blog</a>
                        <p class="blog-post-meta dateColor text-right">{{{ $post->created_at}}} <span class="normalColor">by </span><a href="#" class="userColor">{{{$post->user->first_name}}}</a></p>
                        <hr>
                    </div><!-- /.blog-post -->
                @endforeach

                <nav>
                    <ul class="pager">

                        {{ $posts->appends(array('search' => Input::get('search')))->links() }}
                        @if(Auth::check())
                            @if (Auth::user()->role == 'admin')
                                <li><a href="{{{action('PostsController@create')}}}">Create Post</a></li>
                            @endif
                        @endif
                    </ul>
                </nav>
            </div><!-- /.blog-main -->

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>Search the blogs</h4>

                        {{ Form::open(array('action' => 'PostsController@index', 'method' => 'GET')) }}

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>

                            {{Form::close()}}

                </div>

                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        @foreach ($achiveLinks as $post)

                            <li><a href="{{{action('PostsController@archive')}}}?year={{{$post->year}}}&Month={{{$post->month}}}">{{{ $post->month}}} {{{$post->year}}}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div><!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </div><!-- /.container -->
@stop
