<?php 
date_default_timezone_set('Asia/Jakarta');
?>

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/menuservis.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/dtpick/jquery.datetimepicker.css">
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.css' rel='stylesheet' />
<script src='<?= base_url() ?>assets/geocoder/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='<?= base_url() ?>assets/geocoder/mapbox-gl-geocoder.css' type='text/css' />

<style>
#geocoder-container > div {
    min-width:50%;
    margin-left:25%;
}
#map { width:100%; height:300px; box-shadow:0px 3px 10px #DBD9D9; border:1px solid #C5C4C4;}
</style>

<div class="servis">
	<div class="bg_img_servis">
		<img src="<?= base_url() ?>assets/images/bg_servisdarurat.jpg" class="img_servis">
	</div>
	<div> <i class="mdi mdi-cash-usd"></i> <a href="<?= base_url() ?>sjm/daftarharga" id="teks_biaya_servis">cek biaya servis </a></div>

	<div class="bg_form_input_servis">

		<?php foreach ($user as $tmp_user) : ?>
		<form action="<?= base_url('sjm/pesananumum') ?>" method="POST" id="form">

			<input class="form-control  forms"  name="no_pesanan" id="no_pesanan" type="hidden" value="<?= substr($tmp_user->nama_user,0,2)."-".uniqid()."-DRT"; ?>">
			
			<input type="hidden" name="foto_user" value="<?= $tmp_user->foto_user; ?>">

			<input class="form-control  forms"  name="id_user" id="id_user" type="hidden" value="<?= $tmp_user->id_user; ?>">
			<input class="form-control  forms"  name="waktu_pemesanan" id="waktu_pemesanan" type="hidden" 
			value="<?= date('Y-m-d H:i:s'); ?>">

			<input class="form-control  forms"  name="waktu_pengerjaan" id="waktu_pengerjaan" type="hidden" 
			value="<?= date('Y-m-d H:i:s'); ?>">

			<input class="form-control  forms"  name="jenis_pesanan" id="jenis_pesanan" type="hidden" value="Servis Darurat">
			<input class="form-control  forms"  name="status" id="foto" type="hidden" value="belum dikerjakan">

			<div class=" lebar-form">
				<div class="pembungkus-forminput">
					<div class="teks-forminput">Nama</div>
					<input required placeholder="masukan nama anda" class="form-control  forms"  name="nama_user" id="nama" type="text" value="<?= $tmp_user->nama_user; ?>">
				</div>

				<div class="pembungkus-forminput">
					<div class="teks-forminput">Merk Mobil/Motor</div>
					<input  required class="form-control  forms"  name="merk_kendaraan" id="merk_kendaraan" type="text" placeholder="Toyota Avanza, Honda Vario,dll.." autocomplete="off">
				</div>
			</div>

			<div class=" lebar-form">
				<div class="pembungkus-forminput">
					<div class="teks-forminput">Plat Nomor Kendaraan</div>
					<input  required class="form-control  forms"  name="plat_nomor" id="plat_nomor" type="text" placeholder="ex: B3681XXX" autocomplete="off">
				</div>
				<div class="pembungkus-forminput">
					<div class="teks-forminput">Nomor HP</div>
					<input required placeholder="masukan nomor HP yang bisa dihubungi" class="form-control  forms"  name="no_tlp_user" id="no_tlp_user" type="text"  value="<?= $tmp_user->no_tlp_user; ?>">
				</div>
			</div>

			<div class="lebar-form">
				<div class="pembungkus-forminput">
					<div class="teks-forminput">Kendala yang dialami</div>
					<textarea rows="8" class="form-control  forms"  name="kendala_kendaraan" id="kendala"  required="required" ></textarea>
				</div>

			</div>


				<div class="pembungkus-forminput">
					<div class="teks-forminput">Pilih lokasi anda saat ini</div>
					<div id="map"></div>
				</div>



			<div class=" lebar-form">
				<div  class="pembungkus-btn">
					<button type="submit" name="submit" class="btn btn-info btn-block  btn-submit"><span class="mdi mdi-telegram mdi-18px"></span> Kirim </button>

					<button type="reset" name="reset" class="btn btn-danger btn-block  btn-reset"><span class="mdi mdi-eraser mdi-18px"></span> Reset </button>
				</div>
			</div>	

		</form>
		<?php endforeach; ?>

	</div>

</div>

<script type="text/javascript" src="<?= base_url() ?>assets/dtpick/jquery.datetimepicker.js"></script>
	  		
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlqJUrw8XKdPCRSRniYEYkZ3gAfgFmOZs&libraries=places"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/maps/gmaps.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$("#waktu_pengerjaan").datetimepicker({format:'d-m-Y H:i:s'});
	});
</script>


<!-- Map -->
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoidWJheWRpbGxhaCIsImEiOiJjam1hZHl1ZWYwOWc4M3FyMThjbXFleGFjIn0.XT1hFkD7dd3qr_HOXV3P8A';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v9',
    center: [-79.4512, 43.6568],
    zoom: 13
});

var geocoder = new MapboxGeocoder({
    accessToken: mapboxgl.accessToken
});

map.addControl(geocoder);

// After the map style has loaded on the page, add a source layer and default
// styling for a single point.
map.on('load', function() {
    map.addSource('single-point', {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": []
        }
    });

    map.addLayer({
        "id": "point",
        "source": "single-point",
        "type": "circle",
        "paint": {
            "circle-radius": 10,
            "circle-color": "#007cbf"
        }
    });

 	// Add geolocate control to the map.
	// map.addControl(new mapboxgl.GeolocateControl({
	//     positionOptions: {
	//         enableHighAccuracy: true
	//     },
	//     trackUserLocation: true
	// }));

	// var marker = new mapboxgl.Marker({
 	//    draggable: true
	// })
	//     .setLngLat([0, 0])
	//     .addTo(map);

	// function onDragEnd() {
	//     var lngLat = marker.getLngLat();
	//     coordinates.style.display = 'block';
	//     coordinates.innerHTML = 'Longitude: ' + lngLat.lng + '<br />Latitude: ' + lngLat.lat;
	// }

	// marker.on('dragend', onDragEnd);

    // Listen for the `result` event from the MapboxGeocoder that is triggered when a user
    // makes a selection and add a symbol that matches the result.
    geocoder.on('result', function(ev) {
        map.getSource('single-point').setData(ev.result.geometry);
    });
});
</script>
