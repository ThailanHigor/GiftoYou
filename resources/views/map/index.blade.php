@extends('layouts.app')

<style>
#map {
        height: 60%;
      }
.gm-style-iw{
    color: black
}
</style>

@section('content')
<div class="container">
    <div class="row" style="width: 100%;">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success textos-soltos">
                <div>
                    <p style="text-align:center;font-size: 18px;font-family: 'Acme', sans-serif;">Aqui estão suas lojas preferidas</p>
                </div>

                <div id="map"></div>
            </div>

            <div>
                @foreach ($lojas as $loja)
                    <input class="markers" type="hidden"
                    data-lat ="{{$loja['Latitude']}}" data-long = "{{$loja['Longitude']}}" 
            data-nome="{{$loja['Nome']}}">
                @endforeach
            </div>
        </div>
    </div>
</div>





<!--AIzaSyBknbwOY-E2Sz437ywIu0UyNuo5UO_78Oo -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBknbwOY-E2Sz437ywIu0UyNuo5UO_78Oo&callback=initMap"
async defer></script>


<script>  

    var locations = $(".markers"); 

    locations.each(function(index) {
       late= $(this).attr("data-lat");
       longe= $(this).attr("data-long");
       nome= $(this).attr("data-nome");

       myLatLng = {lat: parseFloat(late),lng:parseFloat(longe)};
       console.log(myLatLng);
       
       var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          icon:'/images/icons/pin.png',
          title: nome
        });

        // var infoWindow = new google.maps.InfoWindow();

        // google.maps.event.addListener(marker, 'click', function () {
        //     infoWindow.setContent("<b>"+nome+"</b>");
        //     infoWindow.open(map, this);
        // });
    
    });
 


</script>

@endsection

<script>    

        var map;
        function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 13
        });
        infoWindow = new google.maps.InfoWindow;

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
                };

                infoWindow.setPosition(pos);
                infoWindow.setContent('Você.');
                infoWindow.open(map);
                map.setCenter(pos);
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
            } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
            }
        
        }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
      </script>