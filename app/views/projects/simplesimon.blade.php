@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="/css/simplesimon.css">
    <link rel="icon"type="image/png" href="/imgs/favicon.ico">
    <title>Simple Simon</title>
@stop

@section('content')
    <div class="container blogHolder">
        <div class="blog-header">
    <div class="container">
        <div class="simonHolder">
            <div>
                <h1 id="simonHeader">Simple Simon</h1>
            </div>

            <div id="wrapper">
                <div id="redButton" class="flexStyle simonButtons buttonStyle" data-id="1"></div>
                <div id="blueButton" class="flexStyle simonButtons buttonStyle" data-id="2"></div>
                <div id="greenButton" class="flexStyle simonButtons buttonStyle" data-id="3"></div>
                <div id="orangeButton" class="flexStyle simonButtons buttonStyle" data-id="4"></div>
            </div>

            <div id="centerCircle">
                <p  class="buttonStyle" data-id="5"></p>
                <p id="simonCount">Score: 0</p>
                <p id="highScore"> High Score: 0</p>
                <button id="startButton" type="button">Start</button>
            </div>
        </div>
    </div>
</div>
</div>
@stop

@section('js')
    <script src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <script src="/js/jqueryRotate.js"></script>
    <script src="/js/simplesimon.js"></script>
@stop
