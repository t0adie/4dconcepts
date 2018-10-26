// JavaScript Document

function initialize() {
  var MY_MAPTYPE_ID = 'custom_style';
  var featureOpts = [
    {
      stylers: [
        { visibility: 'simplified' },
        { gamma: 0.5 },
        { weight: 0.5 }
      ]
    },
    {
      elementType: 'labels',
      stylers: [
        { visibility: 'on' }
      ]
    },
    {
      featureType: 'water',
      stylers: [
        { color: '#00CCFF' }
      ]
    }
  ];
  var vaderLake = new google.maps.LatLng(44.93000,-77.881393);
  var mapOptions = {
    zoom: 12,
    center: vaderLake,
	scrollwheel: false,
	disableDefaultUI: true,
    mapTypeId: MY_MAPTYPE_ID
  };

  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var styledMapOptions = {
    name: 'Custom Style'
  };

  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions, marker);
  
  var endoShadow = {
  	url: 'http://endocycle.com/wp-content/themes/endocycle/images/fallGuy-shadow.png',
  	anchor: new google.maps.Point(32, 0)
  };
    
  var image = 'http://endocycle.com/wp-content/themes/endocycle/images/fallGuy.png';
  var endocycle = new google.maps.LatLng(44.922970,-77.885670);
  var marker = new google.maps.Marker({
  	position: endocycle,
	map: map,
	icon: image,
	shadow: endoShadow
  });
    
  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
  
}

google.maps.event.addDomListener(window, 'load', initialize);