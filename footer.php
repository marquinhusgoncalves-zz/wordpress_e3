		</div> <!-- .site-main -->

		<footer class = "site-footer site-footer-bg clearfix">
			<div class = "container site-footer-content">

				<div class = "col-xs-12 col-sm-8 col-md-6 footer-text" style = "padding: 0 !important">
					The Square Granja Viana<br>
					Rodovia Raposo Tavares, Km 22 - Bloco F - Sala 405<br>
					Granja Viana - CEP 06709-015 - Cotia - São Paulo<br>
					+55 11 2898-9691 • 2898-9674
				</div>

			</div>

		</footer><!-- #colophon .site-footer -->

	</div> <!-- #stage -->

</body>

<script src = "https://maps.googleapis.com/maps/api/js?v=3.exp"></script>	
<script type = "text/javascript">
	
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
	
	    </script>

<?php wp_footer(); ?>


</html>