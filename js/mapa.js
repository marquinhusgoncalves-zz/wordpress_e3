			function initialize() {
				var myLatlng = new google.maps.LatLng(-23.589981,-46.824496,17);
				var mapOptions = {
					zoom: 16,
					center: myLatlng,
					disableDefaultUI: false,
					scrollwheel: false,
					draggable: false
				}
				var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: 'E3 Gerenciamento de Empreendimento'
				});
	
				var styles = [
					{
						stylers: [
							{ hue: "#FF8600" },
							{ saturation: -20 }
						]
					},{
						featureType: "road",
						elementType: "geometry",
						stylers: [
							{ lightness: 100 },
							{ visibility: "simplified" }
						]
					},{
						featureType: "road.local",
						elementType: "labels",
					}
				];
	
				map.setOptions({styles: styles});
			}
	
			google.maps.event.addDomListener(window, 'load', initialize);