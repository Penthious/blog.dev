@extends('layouts.master')
@section('content')
    <div class="container blogHolder text-center">
        <div class="blog-header">
            <h1>Blog Creation</h1>
            <form  action="{{{action('PostsController@store')}}}" method="post">
                <div class="form-group">
                    <label for="usr">Blog Title:</label>
                    <input type="text" class="form-control text-center" name="title" id="usr">
                </div>
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" name="body" id="comment"></textarea>
                </div>
                <button type="submit" name="button">Save</button>
            </form>
        </div>
        </div>
    </div>
@endsection
