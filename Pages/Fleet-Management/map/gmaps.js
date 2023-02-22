let lat, long;
let directionDisplay ;
let map
let myLatLng 
function initMap(){
 myLatLng = { lat: 12.8797, lng: 121.774 };

const mapOption = {
  center: myLatLng,
  zoom: 6.8,
  mapTypeId: google.maps.MapTypeId.ROADMAP,
};

 map = new google.maps.Map(
  document.getElementById("googleMap"),
  mapOption
);

 directionDisplay = new google.maps.DirectionsRenderer({suppressMarkers: true});

directionDisplay.setOptions({
  polylineOptions: {
    strokeColor: "#2563eb",
    geodesic: true,
    strokeOpacity: 1,
    strokeWeight: 3,
  },
});

directionDisplay.setMap(map);

navigator.geolocation.getCurrentPosition((position) => {
  lat = position.coords.latitude;
  long = position.coords.longitude;
  marker(lat,long,map)

  navigator.geolocation.watchPosition(function(position) {
    lat = position.coords.latitude;
    long = position.coords.longitude;
    ///send to databse lat long
    
    marker(lat,long,map)
    calculateDistance()
  });


});



  const to = document.getElementById("to");

  new google.maps.places.Autocomplete(to, {
    componentRestrictions: { country: "ph" },
  });

}
// https://i.stack.imgur.com/wN5QD.png

function marker(lat,lng ,map,icon){
  new google.maps.Marker({icon:null})
  new google.maps.Circle({})
  let icons = {
    scaledSize: new google.maps.Size(30, 30)
  };
  if(icon){
    icons = {
      url:icon,
      scaledSize: new google.maps.Size(30, 30)
    }
  }
  new google.maps.Marker({
    position: { lat ,lng},
    map,
    title: "Plate Number",
    icon: icons
  });

  new google.maps.Circle({
    strokeColor: "#65a30d",
    strokeOpacity: 1,
    strokeWeight: 2,
    fillColor: "#a3e635",
    fillOpacity: 0.35,
    map: map,
    center: { lat, lng },
    radius:200,
  });

}





function calculateDistance() {
  const directionService = new google.maps.DirectionsService();

  const request = {
    origin: `${lat},${long}`,
    destination: document.getElementById("to").value,
    travelMode: google.maps.TravelMode["DRIVING"],
    unitSystem: google.maps.UnitSystem.IMPERIAL,
    optimizeWaypoints: true,
    provideRouteAlternatives: true,
    avoidFerries: true,
    avoidHighways: true,
    avoidTolls: true,
  };

  directionService.route(request, function (result, status) {
    const output = document.getElementById("output");

    if (status === google.maps.DirectionsStatus.OK) {
      var leg = result.routes[ 0 ].legs[ 0 ];
      console.log(leg.start_location.lat())
      console.log(leg.start_location.lng())
      marker(leg.start_location.lat(),leg.start_location.lng(),map)
      marker(leg.end_location.lat(),leg.end_location.lng(),map)

      // console.log(leg.end_location)

      output.innerHTML = `<div class="alert-info" > 
      From:  ${lat},${long}
      <br/>To: 
      ${document.getElementById("to").value}
      <br/> distance :
      ${result.routes[0].legs[0].distance.text}
      <br/>durantion :
      ${result.routes[0].legs[0].duration.text}
      </div> `;

      directionDisplay.setDirections(result);
    } else {
      directionDisplay.setDirections({ routes: [] });
      map.setCenter(myLatLng);

      output.innerHTML = `<div class="alert-danger">Could not retrieve driving distance</div>`;
    }
  });
}