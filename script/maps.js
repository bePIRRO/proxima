google.maps.event.addDomListener(window, "load", initialize);
function initialize() {
  var input = document.getElementById("city");
  var autocomplete = new google.maps.places.Autocomplete(input);
  console.log(autocomplete);
}
