@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="/css/caculator.css">
    <title>Calculator</title>
@endsection

@section('content')
    <div class="container blogHolder">

        <div class="blog-header">
            <h1>Codeup Calculator</h1>
            <!-- This is the input section -->
            <div class="calculator_border">
                <div id="newCalculator">
                    <button class="btn btn-Top" id="aButton">a</button>
                    <button class="btn btn-Top" id="bButton">b</button>
                </div>
                <div class="rowInput">
                    <input class="inputSection" id="left-input" type="text" readonly>
                    <input class="inputSection" id="center-input" type="text" readonly>
                    <input class="inputSection" id="right-input" type="text" readonly>
                </div>
                <!-- This is the first section containing 1,2,3,+ -->
                <div class="rowPlusOperator">
                    <button class="btn buttonNumbers buttonOne" data-num="1">1</button>
                    <button class="btn buttonNumbers buttonTwo" data-num="2">2</button>
                    <button class="btn buttonNumbers buttonThree" data-num="3">3</button>
                    <button class="btn buttonOperators" id="buttonPlus" data-ops="plus">+</button>
                </div>
                <!-- This is the first section containing 4,5,6,- -->
                <div class="rowMinusOperator">
                    <button class="btn buttonNumbers buttonFour" data-num="4">4</button>
                    <button class="btn buttonNumbers buttonFive" data-num="5">5</button>
                    <button class="btn buttonNumbers buttonSix" data-num="6">6</button>
                    <button class="btn buttonOperators" id="buttonMinus" data-ops="minus">-</button>
                </div>
                <!-- This is the first section containing 7,8,9,* -->
                <div class="rowTimesOperator">
                    <button class="btn buttonNumbers buttonSeven" data-num="7">7</button>
                    <button class="btn buttonNumbers buttonEight" data-num="8">8</button>
                    <button class="btn buttonNumbers buttonNine" data-num="9">9</button>
                        <button class="btn buttonOperators" id="buttonStar" data-ops="times">*</button>
                </div>
                <!-- This is the first section containing Clear,0,/ -->
                <div class="rowDivideOperator">
                    <button class="btn buttonClear" id="clearInputs" data-ops="clear">AC</button>
                    <button class="btn" id="buttonZero" data-nums="0">0</button>
                    <button class="btn" id="backSpace">DEL</button>
                    <button class="btn buttonOperators" id="buttonDivide" data-ops="divide">/</button>
                </div>
                <!-- This is the section for =,decimal,^,% -->
                <div class="rowoperands">
                    <button class="btn" id="buttonEqual" data-ops="equal">=</button>
                    <button class="btn" id="decimal">.</button>
                    <button class="btn buttonOperators" id="power">^</button>
                    <button class="btn buttonOperators" id="modulas">%</button>
                </div>
                <!-- This is the first section containing the final input -->
                <div>
                    <p id="finalOutCome"type="text" name="name">0</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/calculator.js"></script>
@endsection
