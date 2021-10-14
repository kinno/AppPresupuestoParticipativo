$(document).ready(function(){
    var map = new L.Map("map", {center: [19.354167, -99.630833], zoom: 9});

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href=”http://osm.org/copyright”>OpenStreetMap</a> contributors'
        }).addTo(map);

    $.getJSON("https://gaia.inegi.org.mx/wscatgeo/geo/mgee/15", function(data){
        L.geoJSON(data).addTo(map);
    });
});