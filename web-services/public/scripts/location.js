function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("location is not supported");
    }
}
function showPosition(position) {
  var p = {
      'lon':position.coords.longitude
      , 'lat':position.coords.latitude
  };
  return p;
}
