@extends('layouts.master')
@section('css')
    <title>Portfolio</title>
@stop
@section('content')

    <div class="container blogHolder text-center">
        <div class="blog-header">
            <h1>All Projects</h1>
            <hr>
            <div class="row">
                <div class="portfolioItem">
                    <div class="col-md-12 portfolio-item mainProject">
                        <a href="http://sweetyamsorganic.com"><img class="portfolioItem" src="/img/sweetyams.png" alt=""></a>
                        <h3><a href="http://sweetyamsorganic.com">Sweetyams</a></h3>
                        <p>Sweetyams was a project built for the buisness sweetyams as they wanted a online presence, me and my team ended up building the site out of all custom sass and used a robust back end to handle our many differnt menu items. We ended up have a few polymorphic relationships to link the menu items to the coresponding add on.</p>
                    </div>
                </div>
            </div>
            <hr>
            @foreach($projects as $key => $value)
                <div class="row">

                    <div class="col-md-6 portfolio-item">
                        <a href="{{{action($value[3])}}}"><img class="img-responsive portfolioItem" src="{{{$value[0]}}}" alt=""></a>
                    </div>
                    <h3><a href="{{{action($value[3])}}}">{{{$value[1]}}}</a></h3>
                    <p>{{{$value[2]}}}</p>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@stop
