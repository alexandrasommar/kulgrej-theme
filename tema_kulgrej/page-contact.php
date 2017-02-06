<?php
/**
* Template Name: Kontakt
* Visar kontaktsidan
**/

get_header();
?>
<style>
	#map {
		height: 300px;
	}
</style>
<div id="map"></div>

<main class="main-container flex contact">

	<h1 class="contact-title"><?php the_title(); ?></h1>

	<?php
	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
			the_content();
		}

	} ?>

</main> <!-- /main-container -->
<?php
get_footer();
?>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBz_iX33lVHNaRK9TG7T06En2Z6GwyiysI&callback=initMap">
</script>
<script>
function initMap() {

	var map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 59.301414, lng: 18.027660},
		zoom: 15,
		styles: [
			{elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
							{elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
							{elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
							{
								featureType: 'administrative',
								elementType: 'geometry.stroke',
								stylers: [{color: '#c9b2a6'}]
							},
							{
								featureType: 'administrative.land_parcel',
								elementType: 'geometry.stroke',
								stylers: [{color: '#dcd2be'}]
							},
							{
								featureType: 'administrative.land_parcel',
								elementType: 'labels.text.fill',
								stylers: [{color: '#ae9e90'}]
							},
							{
								featureType: 'landscape.natural',
								elementType: 'geometry',
								stylers: [{color: '#dfd2ae'}]
							},
							{
								featureType: 'poi',
								elementType: 'geometry',
								stylers: [{color: '#dfd2ae'}]
							},
							{
								featureType: 'poi',
								elementType: 'labels.text.fill',
								stylers: [{color: '#93817c'}]
							},
							{
								featureType: 'poi.park',
								elementType: 'geometry.fill',
								stylers: [{color: '#a5b076'}]
							},
							{
								featureType: 'poi.park',
								elementType: 'labels.text.fill',
								stylers: [{color: '#447530'}]
							},
							{
								featureType: 'road',
								elementType: 'geometry',
								stylers: [{color: '#f5f1e6'}]
							},
							{
								featureType: 'road.arterial',
								elementType: 'geometry',
								stylers: [{color: '#fdfcf8'}]
							},
							{
								featureType: 'road.highway',
								elementType: 'geometry',
								stylers: [{color: '#f8c967'}]
							},
							{
								featureType: 'road.highway',
								elementType: 'geometry.stroke',
								stylers: [{color: '#e9bc62'}]
							},
							{
								featureType: 'road.highway.controlled_access',
								elementType: 'geometry',
								stylers: [{color: '#e98d58'}]
							},
							{
								featureType: 'road.highway.controlled_access',
								elementType: 'geometry.stroke',
								stylers: [{color: '#db8555'}]
							},
							{
								featureType: 'road.local',
								elementType: 'labels.text.fill',
								stylers: [{color: '#806b63'}]
							},
							{
								featureType: 'transit.line',
								elementType: 'geometry',
								stylers: [{color: '#dfd2ae'}]
							},
							{
								featureType: 'transit.line',
								elementType: 'labels.text.fill',
								stylers: [{color: '#8f7d77'}]
							},
							{
								featureType: 'transit.line',
								elementType: 'labels.text.stroke',
								stylers: [{color: '#ebe3cd'}]
							},
							{
								featureType: 'transit.station',
								elementType: 'geometry',
								stylers: [{color: '#dfd2ae'}]
							},
							{
								featureType: 'water',
								elementType: 'geometry.fill',
								stylers: [{color: '#b9d3c2'}]
							},
							{
								featureType: 'water',
								elementType: 'labels.text.fill',
								stylers: [{color: '#92998d'}]
							}
		]
	});
	var marker = new google.maps.Marker({
					position: {lat: 59.301414, lng: 18.027660},
					map: map,
					title: 'Kulgrej'
				});
}

</script>
