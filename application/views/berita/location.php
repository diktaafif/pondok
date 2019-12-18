<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">

<section class="lengkapBerita" >
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center">Lokasi</h1>
            <hr>
          </div>
        </div>
        <div class="row">
        	<div class="col-sm-12">
        	<div id="map"></div>
        	</div>	
        </div>	
      </div>
    </section>
    <br><br>

 	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqnjBfkLsqcr5ITIgodpZ-vfU0vm4eeVU&callback=initMap">
    </script>

	<script>
		// Initialize and add the map
		function initMap() {
		// The location of Uluru
		var uluru = {lat: -25.344, lng: 131.036};
		// The map, centered at Uluru
		var map = new google.maps.Map(
		  document.getElementById('map'), {zoom: 4, center: uluru});
		// The marker, positioned at Uluru
		var marker = new google.maps.Marker({position: uluru, map: map});
		}
	</script>