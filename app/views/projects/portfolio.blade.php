@extends('layouts.master')
@section('css')
    <title>Portfolio</title>
@stop
@section('content')
    <?php $projects1 = [
        ['/img/simplesimon.png','Simple Simon', 'Simple Simon built out of jquery and css.',"action('HomeController@showSimon')"],
        ['/img/tictactoe.png','Tic Tac Toe', 'Tic Tac Toe built out of Vanilla javascript and css.','action(HomeController@showTicTacToe)'],

    ]; ?>
    <?php $projects2 = [
        ['/img/whackamole.png','Whack a Mole', 'Whack a Mole built out of jquery and css.','action(HomeController@showSimon)'],
        ['/img/weathermap.png','Weather Map', 'Weather Map built out of jquery, css, google api and weather api.','action(HomeController@showSimon)'],
    ] ?>
    <?php $projects3 =[
        ['/img/calculator.png','Calculator', 'Calculator built out of Vanilla javascript and css.','action(HomeController@showSimon)'],
    ] ?>
    <div class="container blogHolder text-center">
        <div class="blog-header">
            <div class="row">
                <div class="portfolioItem">
                    <div class="col-md-12 portfolio-item mainProject">
                        <a href=""><img class="portfolioItem" src="/img/simplesimon.png" alt=""></a>
                        <h3><a href="#">test</a></h3>
                        <p>test</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
            @foreach($projects1 as $value)
                <div class="col-md-6 portfolio-item">
                    <a href="{{{$value[3]}}}"><img class="img-responsive portfolioItem" src="{{{$value[0]}}}" alt=""></a>
                    <h3><a href="#">{{{$value[1]}}}</a></h3>
                    <p>{{{$value[2]}}}</p>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="row">
        @foreach($projects2 as $value)
            <div class="col-md-6 portfolio-item">
                <a href="#">
               <img class="portfolioItem" src="{{{$value[0]}}}" alt="">
                </a>
                <h3>
                    <a href="#">{{{$value[1]}}}</a>
                </h3>
                <p>{{{$value[2]}}}</p>
            </div>
        @endforeach
    </div>
    <hr>
    <div class="row">
        @foreach($projects3 as $value)
            <div class="col-md-6 portfolio-item">
                <a href="#">
               <img class="portfolioItem" src="{{{$value[0]}}}" alt="">
                </a>
                <h3>{{{$value[1]}}}</h3>
                <p>{{{$value[2]}}}</p>
            </div>
        @endforeach
    </div>
        </div>
    </div>
@stop
