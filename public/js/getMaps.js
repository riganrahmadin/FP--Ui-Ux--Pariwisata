let map;

async function initMap() {
  const { Map } = await google.maps.importLibrary("maps");
  map = new Map(document.getElementById("map"), {
    center: { lat: -7.7827623221833875, lng: 110.36703275776573},
    zoom: 8,
  });
}

initMap();

