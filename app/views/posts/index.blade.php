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
                        {{ $posts->links() }}
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
                    <h4>About</h4>
                    <p>This is where I post everything that I feel is intresting and cool, So enjoy the stories that I write!</p>
                </div>

                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
            </div><!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </div><!-- /.container -->
@stop
