"use strict";
var addressInput = "7406 snow valley";
weatherApi();
googleMaps();
$("#addressForm").keydown(function (event) {
    if (event.keyCode == 13) {
        addressInput = $("#addressForm").val();
        googleMaps();
        weatherApi();
    }
});

$("#addressButton").on("click", function (event) {
    addressInput = $("#addressForm").val();
    googleMaps();
    weatherApi();
});
function weatherApi() {
    $.get("http://api.openweathermap.org/data/2.5/forecast/daily", {

        APPID: "8c918e3b0b0ee8835f76a3fb956393fc",
        q:     addressInput,
        cnt:   "3",
        units: "imperial"
    }).done(function (data) {
    var tables = createTable(data),
     createMap = googleMaps();
    $("#weatherBorder").html(tables);
    $("#map-canvas").append(createMap);
}).fail(function () {
    alert("Input correct address")
});
}



function createTable(data) {
    var content  = "";
    content += "<div><h2>" + data.city.name + "</h2></div>";
    content += "<table class='tableMain'>";

    content += "<tr>";
    data.list.forEach(function (element,index,array) {
        var date = new Date(element.dt * 1000);
        content += "<td class='tableBorder'>" +  date.toDateString() + "</td>"
    });
    content += "</tr>";
    content += "<tr>";
    data.list.forEach(function (element,index,array) {
        content += "<td class='tableBorder'>" + Math.round(element.temp.max) + "/" + Math.round(element.temp.min) + "&#8457;" + "</td>"
    });
    content += "</tr>";

    content += "<tr>";
    data.list.forEach(function (element,index,array) {
        content += '<td class="tableBorder"><img src ="http://openweathermap.org/img/w/' + element.weather[0].icon + '.png">' + "</td>"
    });
    content += "</tr>";

    content += "<tr>";
    data.list.forEach(function (element,index,array) {
        content += '<td class="tableBorder">' + element.weather[0].main + ': ' + element.weather[0].description + "</td>"
    });
    content += "</tr>";
    content += "<tr>";
    data.list.forEach(function (element,index,array) {
        content += '<td class="tableBorder"> Humidity: ' + Math.round(element.humidity) + "</td>"
    });
    content += "</tr>";

    content += "<tr>";
    data.list.forEach(function (element,index,array) {
        content += '<td class="tableBorder"> Wind: ' + Math.round(element.speed) + "</td>"
    });
    content += "</tr>";

    content += "<tr>";
    data.list.forEach(function (element,index,array) {
        content += '<td class="tableBorder"> Pressure ' + Math.round(element.pressure) + "</td>"
    });
    content += "</tr>";
    content += "</table>";
    return content;
}
function googleMaps() {
    var mapOptions = {
        // Set the zoom level
        zoom: 18,

        // This sets the center of the map at our location
        center: {
            lat:  29.4284595,
            lng: -98.492433
        }
    };

    // Render the map

    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions),
     mapAddress = new google.maps.Geocoder(),
     addressHome = addressInput;
    mapAddress.geocode({"address": addressHome}, function (result, status){
        if (status == google.maps.GeocoderStatus.OK) {

            map.setCenter(result[0].geometry.location);

            var marker = new google.maps.Marker({
                position: result[0].geometry.location,
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP
            });

            // map.addListener('click', toggleBounce);
            // function toggleBounce() {
            //     console.log(google.maps);
            //     var marker = new google.maps.Marker({
            //         position:
            //     map: map,
            //     draggable: true,
            //     animation: google.maps.Animation.DROP,
            //     });
            // }




            google.maps.event.addListener(map, 'click', function (event) {
               addMarker(event.latLng, map);

           });
            function addMarker(location, map) {
                var lat = location.lat;
                var lng = location.lng;

                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    draggable: true,
                    animation: google.maps.Animation.DROP


                });
                marker.addListener("dragend", function (event) {

                })
            }



            var infowindow = new google.maps.InfoWindow({
                content: "<p class='textBoxColors'>Changing the world, one programmer at a time.</p>"
            });
            infowindow.open(map, marker);

        }
    });
}
