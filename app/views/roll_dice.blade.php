@extends('layouts.master')
@section('content')
    <h1>Guess: {{{$roll}}}</h1>
    <h1>Number: {{{$random_roll}}}</h1>
    @if ($roll == $random_roll)
        <p>
            you guessed correctly.
        </p>
    @endif
        <p>
            The answer was {{{$random_roll}}}
        </p>

@stop
