<script type="text/javascript">
jQuery(document).ready(function() {
jQuery('#insert_gmap').on('click', function() {
var g_width = jQuery('input#g_width').val();
var g_height = jQuery('input#g_height').val();
var g_class = jQuery('input#g_class').val();
var map_id_admin = jQuery('input#map_id_admin').val();
var g_style = jQuery('select#g_style').val();
var g_zoom = jQuery('input#g_zoom').val();
var g_image = jQuery('input#g_image').val();
if ( map_id_admin == undefined || map_id_admin.length == 0 ) {
	alert('Select Location First.');
	return false;
}
window.send_to_editor('<p>[gmap ');
window.send_to_editor(' g_width="' + g_width + '" ');
window.send_to_editor(' g_height="' + g_height + '" ');
window.send_to_editor(' g_class="' + g_class + '" ');
window.send_to_editor(' map_id="' + map_id_admin + '" ');
window.send_to_editor(' g_style="' + g_style + '" ');
window.send_to_editor(' g_zoom="' + g_zoom + '" ');
window.send_to_editor(' g_image="' + g_image + '" ');
window.send_to_editor(' ]</p>');
tb_remove();
})
});
</script>
<?php 

// add_action( 'wp_head', 'add_inline_script', array('jquery'));
 ?>



<div class="container">
  <form action="/" method="get" accept-charset="utf-8">
    <div class="row">
      <div class="col-755" style="width: 100%;">
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
		    <input id="pac-input" class="controls" type="text" placeholder="Search Box" style="height: 35px;">
			<input type="hidden" name="map_id_admin" id="map_id_admin" >
		    <div id="map_admin" style="height: 135px; margin-bottom:20px; "></div>
		    <script>
		      function initAutocomplete() {
		        var map = new google.maps.Map(document.getElementById('map_admin'), {
		          center: {lat: -33.8688, lng: 151.2195},
		          zoom: 14,
		          mapTypeId: 'roadmap'
		        });

		        // Create the search box and link it to the UI element.
		        var input = document.getElementById('pac-input');
		        var searchBox = new google.maps.places.SearchBox(input);
		        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

		        // Bias the SearchBox results towards current map's viewport.
		        map.addListener('bounds_changed', function() {
		          searchBox.setBounds(map.getBounds());
		        });

		        var markers = [];
		        // Listen for the event fired when the user selects a prediction and retrieve
		        // more details for that place.
		        searchBox.addListener('places_changed', function() {
		          var places = searchBox.getPlaces();

		          if (places.length == 0) {
		            return;
		          }

		          // Clear out the old markers.
		          markers.forEach(function(marker) {
		            marker.setMap(null);
		          });
		          markers = [];

		          // For each place, get the icon, name and location.
		          var bounds = new google.maps.LatLngBounds();
		          places.forEach(function(place) {
		            if (!place.geometry) {
		              console.log("Returned place contains no geometry");
		              return;
		            }
		            var icon = {
		              url: place.icon,
		              size: new google.maps.Size(71, 71),
		              origin: new google.maps.Point(0, 0),
		              anchor: new google.maps.Point(17, 34),
		              scaledSize: new google.maps.Size(25, 25)
		            };

		            // Create a marker for each place.
		            markers.push(new google.maps.Marker({
		              map: map,
		              icon: icon,
		              title: place.name,
		              position: place.geometry.location
		            }));

		            if (place.geometry.viewport) {
		              // Only geocodes have viewport.
		             var map_id= bounds.union(place.geometry.viewport);
					 jQuery('#map_id_admin').val(place.geometry.location);
		            } else {
		              bounds.extend(place.geometry.location);
		            }
		          });
		          var map_id1= map.fitBounds(bounds);
		        });
		      }
		    </script>
			<?php $api = get_option('google_api'); ?>
		    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo esc_attr(isset($api['google_api'])) ?>&libraries=places&callback=initAutocomplete"
		    async defer></script>
		</div>
    </div>
    <div class="row">
		<div class="col-25">
			<label for="lname"><?php esc_html_e("Zoom Level","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="range" min="0" max="30" class="fontsizeh" value="14" step="1" list="tickmarks" id="g_zoom" oninput="outputtt.value = g_zoom.value">
			<datalist id="tickmarks">
				<option value="0 to 4"><?php esc_html_e("0","selements"); ?></option>
				<option><?php esc_html_e("4","selements"); ?></option>
				<option><?php esc_html_e("8","selements"); ?></option>
				<option><?php esc_html_e("10","selements"); ?></option>
				<option><?php esc_html_e("15","selements"); ?></option>
				<option><?php esc_html_e("18","selements"); ?></option>
				<option><?php esc_html_e("20","selements"); ?></option>
				<option><?php esc_html_e("25","selements"); ?></option>
				<option><?php esc_html_e("30","selements"); ?></option>
			</datalist>
			<span>
			<output id="outputtt" for="g_zoom"><?php esc_html_e("14","selements"); ?></output></span>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="lname"><?php esc_html_e("Style","selements"); ?></label>
		</div>
		<div class="col-75">
			<select id="g_style" class="g_style">
		        <option value="default"><?php esc_html_e("Default","selements"); ?></option>
		        <option value="silver"><?php esc_html_e("Silver","selements"); ?></option>
		        <option value="night"><?php esc_html_e("Night mode","selements"); ?></option>
		        <option value="retro" selected="selected"><?php esc_html_e("Retro","selements"); ?></option>
		        <option value="hiding"><?php esc_html_e("Hide features","selements"); ?></option>
	     	</select>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="fname"><?php esc_html_e("Marker icon image URl","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="<?php esc_attr_e("Image url","selements"); ?>" type="text" id="g_image" value="" name="g_image"/>
		</div>
	</div>
	<div class="row">
		<div class="col-25">
			<label for="lname"><?php esc_html_e("Width","selements"); ?></label>
		</div>
		<div class="col-75">
			<input type="range" min="0" max="1600" class="fontsizeh" value="600" step="1" list="tickmarks" id="g_width" oninput="outputt.value = g_width.value">
			<datalist id="tickmarks">
				<option value="0 to 200"><?php esc_html_e("0","selements"); ?></option>
				<option><?php esc_html_e("200","selements"); ?></option>
				<option><?php esc_html_e("400","selements"); ?></option>
				<option><?php esc_html_e("600","selements"); ?></option>
				<option><?php esc_html_e("800","selements"); ?></option>
				<option><?php esc_html_e("1000","selements"); ?></option>
				<option><?php esc_html_e("1200","selements"); ?></option>
				<option><?php esc_html_e("1400","selements"); ?></option>
				<option><?php esc_html_e("1600","selements"); ?></option>
			</datalist>
			<span>
			<output id="outputt" for="g_width"><?php esc_html_e("600","selements"); ?></output></span>
		</div>
	</div>
    <div class="row">
      <div class="col-25">
        <label for="country"><?php esc_html_e("Height","selements"); ?></label>
      </div>
      <div class="col-75">
				<input type="range" min="0" max="1600" class="fontsizeh" value="400" step="1" list="tickmarks" id="g_height" oninput="output.value = g_height.value">
				<datalist id="tickmarks">
					<option value="0 to 200">0<?php esc_html_e("600","selements"); ?></option>
					<option><?php esc_html_e("200","selements"); ?></option>
					<option><?php esc_html_e("400","selements"); ?></option>
					<option><?php esc_html_e("600","selements"); ?></option>
					<option><?php esc_html_e("800","selements"); ?></option>
					<option><?php esc_html_e("1000","selements"); ?></option>
					<option><?php esc_html_e("1200","selements"); ?></option>
					<option><?php esc_html_e("1400","selements"); ?></option>
					<option><?php esc_html_e("1600","selements"); ?></option>
				</datalist>
				<span>
				<output id="output" for="g_height"><?php esc_html_e("400","selements"); ?></output></span>
      </div>
    </div>
	<div class="row">
		<div class="col-25">
			<label for="fname"><?php esc_html_e("Extra CSS Class","selements"); ?></label>
		</div>
		<div class="col-75">
			<input class="input-medium" placeholder="<?php esc_attr_e("Extra class","selements"); ?>" type="text" id="g_class" value="" name="g_class"/>
		</div>
	</div>
    <div class="row">
			<div class="col-25">
      	<input class="btn custom_button_shortcode" value="<?php esc_attr_e("Insert","selements"); ?>" name="" id="insert_gmap" style="display: block;">
    	</div>
	</div>
  </form>
</div>
