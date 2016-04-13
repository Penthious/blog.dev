@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="/css/weathermap.css">
    <title>Weather Map</title>
@endsection

@section('content')
    <div class="container blogHolder">
        <div class="blog-header">
            <div id="centerAll">
                <div id="weatherBorder">
                    <h1>Weather Aplication</h1>
                </div>
                <input id="addressForm" type="text" name="name" value="" placeholder="Enter address">
                <button id="addressButton" type="submit" name="button">Submit</button>
                </input>
                <div id="map-canvas"></div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJsRYcUVYvttXRCkBNNC5rfhesUjpXIx8"></script>
    <script src="/js/weathermap.js"></script>
@endsection
