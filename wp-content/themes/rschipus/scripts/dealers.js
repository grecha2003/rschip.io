$(window).load(function () {

	if (!$('#map-init').length == 0) {
		$('body').append('<script src="wp-content/themes/rschipus/plugins/markerclusterer.js"></script>' + '<script src="//maps.googleapis.com/maps/api/js?key='+mapData.apiKey+'&signed_in=true&callback=initMap" async="" defer=""></script>');
	}

	// generate dealers list from json
	// addList(dealersData.responseJSON);
});

function ZoomControl(controlDiv, map, zoomVal) {

	// Set CSS for the control border.
	var controlUI = document.createElement('div');
	controlUI.style.backgroundColor = '#fff';
	controlUI.style.border = '2px solid #fff';
	controlUI.style.borderRadius = '0 0 3px 3px';
	controlUI.style.boxShadow = 'rgba(0, 0, 0, 0.3) 0px 1px 4px -1px';
	controlUI.style.cursor = 'pointer';
	controlUI.style.marginBottom = '22px';
	controlUI.style.textAlign = 'center';
	controlUI.classList.add('map-zoom');
	controlUI.title = 'Click to zoom out';
	controlDiv.appendChild(controlUI);

	// Set CSS for the control interior.
	var controlText = document.createElement('div');
	controlText.style.color = 'rgb(25,25,25)';
	controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
	controlText.style.fontSize = '16px';
	controlText.style.lineHeight = '38px';
	controlText.style.paddingLeft = '5px';
	controlText.style.paddingRight = '5px';
	controlText.classList.add('map-zoom__text');
	controlText.innerHTML = 'Zoom out';
	controlUI.appendChild(controlText);

	// Setup the click event listeners: simply set the map to Chicago.
	controlUI.addEventListener('click', function () {
		map.setZoom(zoomVal);
	});
}

var dealersData = $.getJSON("wp-content/themes/rschipus/ajax/dealers.json", function (data) {
	addList(data);
	return data;
});
function initMap() {

	var initialZoom = 2,
	    markerIcon = "wp-content/themes/rschipus/images/png/distributors.png",
	    zoomToMarker = 15;

	var map = new google.maps.Map(document.getElementById('map-init'), {
		center: { lat: 40.376671, lng: 61.013199 },
		// scrollwheel: false,
		zoom: initialZoom,

		styles: mapData.mapStyles
	});

	// draw markers from json
	var data = dealersData.responseJSON;
	var infoWindows = data.map(function (location, i) {

		var contentString = '<div id="content" class="info-box">' + '<div class="info-box__title">' + location.name + '</div>' + '<div class="info-box__descr">' + location.description + '</div>' + '<dl>' + '<dt>Address:</dt>' + '<dd>' + '<p>' + location.address + '</p>' + '</dd>' + '</dl>' + '<dl>' + '<dt>Contacts:</dt>' + '<dd>' + (location.tel != undefined && location.tel != "" ? '<p>' + location.tel.join('<br>') + '</p>' : '') + function () {
			if (location.mail !== undefined && location.mail != "") {
				var str = '';
				$.each(location.mail, function (i) {
					str += '<p><a href="mailto:' + location.mail[i] + '">' + location.mail[i] + '</a></p>';
				});
				return str;
			} else {
				return '';
			}
		}() + function () {
			if (location.site != undefined && location.site != "") {
				var str = '';
				$.each(location.site, function (i) {
					str += '<p><a target="_blank" href="//' + location.site[i] + '">www.' + location.site[i] + '</a></p>';
				});
				return str;
			} else {
				return '';
			}
		}() + '</dd>' + '</dl>' + '</div>';
		// console.log(contentString);

		return new google.maps.InfoWindow({
			content: contentString
		});
	});

	var markers = data.map(function (location, i) {

		var latLng = new google.maps.LatLng(location.lat, location.lng);

		return new google.maps.Marker({
			position: latLng,
			title: location.name,
			icon: markerIcon
		});
	});
	$.each(markers, function (i) {
		this.addListener('click', function () {
			infoWindows[i].open(map, this);
			map.setZoom(zoomToMarker);
			map.setCenter(this.getPosition());
		});
	});

	var markerCluster = new MarkerClusterer(map, markers, { imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m' });

	// add button to zoom out
	var centerControlDiv = document.createElement('div');
	var centerControl = new ZoomControl(centerControlDiv, map, initialZoom);

	centerControlDiv.index = 1;
	map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);
}

function addList(json) {

	var resultList = '';
	json.map(function (location, i) {
		var string = '' + '<li class="dealers-list__item">' + '<div class="dealers-list__row">' + '<div class="dealers-list__col">' + '<div class="dealers-list__item-title">' + location.name + '</div>' + '<div class="dealers-list__item-descr">' + location.description + '</div>' + '</div>' + '<div class="dealers-list__col">' + '<div class="dealers-list__item-addr">' + location.address + '</div>' + '</div>' + '<div class="dealers-list__col">' + (location.tel != undefined && location.tel != "" ? '<div class="dealers-list__item-tels">' + location.tel.join('<br>') + '</div>' : '') + '</div>' + '<div class="dealers-list__col">' + function () {
			if (location.mail !== undefined && location.mail != "") {
				var str = '';
				$.each(location.mail, function (i) {
					str += '<p class="dealers-list__item-mail"><a href="mailto:' + location.mail[i] + '" title="' + location.mail[i] + '">' + location.mail[i] + '</a></p>';
				});
				return str;
			} else {
				return '';
			}
		}() + function () {
			if (location.site != undefined && location.site != "") {
				var str = '';
				$.each(location.site, function (i) {
					str += '<p class="dealers-list__item-site"><a target="_blank" href="//' + location.site[i] + '" title="' + location.site[i] + '">www.' + location.site[i] + '</a></p>';
				});
				return str;
			} else {
				return '';
			}
		}() + '</div>' + '</div>' + '</li>';
		resultList += string;
	});
	document.querySelector('.dealers-list').innerHTML = resultList;
}