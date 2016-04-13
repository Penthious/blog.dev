@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="/css/whackamole.css">
    <title>whackamole</title>
@endsection

@section('content')
    <div class="container blogHolder">
        <div class="blog-header">
            <div id="topSection">
                <div class="alignItems" id="timer">Timer: <span id="countDown"> </span> </div>
                <div class="alignItems" id="highScore">High Score : 0</div>
                <div class="alignItems" id="currentScore">Score: 0</div>


                <select id="gameModes">
                    <option id="mode0" value="0">Whack-a-Mole</option>
                    <option id="mode1" value="1">Percentage Mole</option>
                </select>


                <select id="gameGrids">
                    <option id="grid0" value="0">3*3</option>
                    <option id="grid1" value="1">6*6</option>
                    <option id="grid2" value="2">9*9</option>
                    <option id="grid3" value="3">12*12</option>
                </select>

                <select id="gameTime">
                    <option id="time0" value="10">10 sec</option>
                    <option id="time1" value="30">30 sec</option>
                    <option id="time2" value="60">60 sec</option>
                    <option id="time3" value="120">120 sec</option>
                </select>

                <div class="alignItems">
                    <button type="submit" id="startGame">Start Game</button>
                </div>

            </div>
            <div class="alignItems" id="moleContainer">
                <div class="moleHoles" data-id="0" id="moleHole0"></div>
                <div class="moleHoles" data-id="1" id="moleHole1"></div>
                <div class="moleHoles" data-id="2" id="moleHole2"></div>
                <div class="moleHoles" data-id="3" id="moleHole3"></div>
                <div class="moleHoles" data-id="4" id="moleHole4"></div>
                <div class="moleHoles" data-id="5" id="moleHole5"></div>
                <div class="moleHoles" data-id="6" id="moleHole6"></div>
                <div class="moleHoles" data-id="7" id="moleHole7"></div>
                <div class="moleHoles" data-id="8" id="moleHole8"></div>
            </div>
            <div id="scoreCount" class="alignItems">Score: 0</div>    
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/whackamole.js"></script>
@endsection
