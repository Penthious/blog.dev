@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="/css/tictactoe.css">
    <title>tictactoe</title>

@endsection

@section('content')
    <div class="container blogHolder">
        <div class="blog-header text-center">
            <h3 class="player1Count">Player X score: 0</h3>
            <h1 class="turn">Turn: O</h1>
            <h3 class="player2Count">Player O score: 0</h3>
            <div class="">
                <div>
                    <button class="btn arrayRow1 arrayRow4 arrayRow7 arrayRowAll" data-id="1">&nbsp;</button>
                    <button class="btn arrayRow2 arrayRow4 arrayRowAll" data-id="2">&nbsp;</button>
                    <button class="btn arrayRow3 arrayRow4 arrayRow8 arrayRowAll" data-id="3">&nbsp;</button>
                </div>
                <div>
                    <button class="btn arrayRow1 arrayRow5 arrayRowAll" data-id="4">&nbsp;</button>
                    <button class="btn arrayRow2 arrayRow5 arrayRow7 arrayRow8 arrayRowAll" data-id="5">&nbsp;</button>
                    <button class="btn arrayRow3 arrayRow5 arrayRowAll" data-id="6">&nbsp;</button>
                </div>
                <div>
                    <button class="btn arrayRow1 arrayRow6 arrayRow8 arrayRowAll" data-id="7">&nbsp;</button>
                    <button class="btn arrayRow2 arrayRow6 arrayRowAll" data-id="8">&nbsp;</button>
                    <button class="btn arrayRow3 arrayRow6 arrayRow7 arrayRowAll" data-id="9">&nbsp;</button>
                </div>
                <h3 class="tieCount">tie: 0</h3>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/tictactoe.js"></script>
@endsection
