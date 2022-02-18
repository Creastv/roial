let map;
function initMap() {
  const mapOptions = {
    zoom: 15,
    disableDefaultUI: true,
    center: {
      lat: 52.2706666,
      lng: 20.9754817
    },
    icon: "../img/pin.svg",
    styles: [
      {
        featureType: "water",
        elementType: "geometry",
        stylers: [
          {
            color: "#e9e9e9"
          },
          {
            lightness: 17
          }
        ]
      },
      {
        featureType: "landscape",
        elementType: "geometry",
        stylers: [
          {
            color: "#f5f5f5"
          },
          {
            lightness: 20
          }
        ]
      },
      {
        featureType: "road.highway",
        elementType: "geometry.fill",
        stylers: [
          {
            color: "#ffffff"
          },
          {
            lightness: 17
          }
        ]
      },
      {
        featureType: "road.highway",
        elementType: "geometry.stroke",
        stylers: [
          {
            color: "#ffffff"
          },
          {
            lightness: 29
          },
          {
            weight: 0.2
          }
        ]
      },
      {
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [
          {
            color: "#ffffff"
          },
          {
            lightness: 18
          }
        ]
      },
      {
        featureType: "road.local",
        elementType: "geometry",
        stylers: [
          {
            color: "#ffffff"
          },
          {
            lightness: 16
          }
        ]
      },
      {
        featureType: "poi",
        elementType: "geometry",
        stylers: [
          {
            color: "#f5f5f5"
          },
          {
            lightness: 21
          }
        ]
      },
      {
        featureType: "poi.park",
        elementType: "geometry",
        stylers: [
          {
            color: "#dedede"
          },
          {
            lightness: 21
          }
        ]
      },
      {
        elementType: "labels.text.stroke",
        stylers: [
          {
            visibility: "on"
          },
          {
            color: "#ffffff"
          },
          {
            lightness: 16
          }
        ]
      },
      {
        elementType: "labels.text.fill",
        stylers: [
          {
            saturation: 36
          },
          {
            color: "#333333"
          },
          {
            lightness: 40
          }
        ]
      },
      {
        elementType: "labels.icon",
        stylers: [
          {
            visibility: "off"
          }
        ]
      },
      {
        featureType: "transit",
        elementType: "geometry",
        stylers: [
          {
            color: "#f2f2f2"
          },
          {
            lightness: 19
          }
        ]
      },
      {
        featureType: "administrative",
        elementType: "geometry.fill",
        stylers: [
          {
            color: "#fefefe"
          },
          {
            lightness: 20
          }
        ]
      },
      {
        featureType: "administrative",
        elementType: "geometry.stroke",
        stylers: [
          {
            color: "#fefefe"
          },
          {
            lightness: 17
          },
          {
            weight: 1.2
          }
        ]
      }
    ]
  };

  map = new google.maps.Map(document.getElementById("map"), mapOptions);

  const marker = new google.maps.Marker({
    position: {
      lat: 52.2706666,
      lng: 20.9754817
    },
    map: map,
    icon: "http://localhost/roial/wp-content/themes/roial/src/img/pin.svg"
  });

  const infowindow = new google.maps.InfoWindow({
    content:
      '<div class="map-modal"><h4>Roial Sp. z o.o.</h4><p>Ul. Hanki Czaki 2/7, 01-588 Warszawa</p><a href="https://www.google.com/maps/place/Roial+Agencja+Interaktywna/@52.2706666,20.9754817,15z/data=!4m5!3m4!1s0x0:0xef6f53eb301ac4c2!8m2!3d52.2706666!4d20.9754817" target="_blank">Jak dojechać</a></div>'
  });

  google.maps.event.addListener(marker, "click", () => {
    infowindow.open(map, marker);
  });
}
