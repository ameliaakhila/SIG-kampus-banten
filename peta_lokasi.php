<?php
$title = "Peta Universitas Di Banten";
include_once "header.php";
?>

      <div class="row">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h2 class="panel-title"><strong> - TAMPILAN PETA - </strong></h2>
            </div>
            <div class="panel-body">
              <div id="map" style="width:100%;height:380px;"></div>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<script type="text/javascript">
  function initialize() {
    var mapOptions = {   
        zoom: 15,
        center: new google.maps.LatLng(-6.1390609, 106.2320029), 
        disableDefaultUI: true
    };

    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    
    var centerMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-6.1390609, 106.2320029),
        map: map,
        title: 'Lokasi Aku',
        icon: 'img/location.png'
    });

    var centerContentString =
        '<div id="content">' +
        '<div id="siteNotice">' +
        '</div>' +
        '<h5 id="firstHeading" class="firstHeading">Lokasi Aku</h5>' +
        '<div id="bodyContent">' +
        '<p>Ini adalah lokasi Aku.</p>' +
        '</div>' +
        '</div>';

    var centerInfowindow = new google.maps.InfoWindow({
        content: centerContentString
      });

    // Tampilkan InfoWindow saat pin lokasi Anda diklik
    google.maps.event.addListener(centerMarker, 'click', function() {
        centerInfowindow.open(map, centerMarker);
    });

    setMarkers(map, officeLocations);
}

var officeLocations = [
    <?php
    $data = file_get_contents('http://localhost/SIG-kampus-banten/ambildata.php');
    $no = 1;
    if (json_decode($data, true)) {
        $obj = json_decode($data);
        foreach ($obj->results as $item) {
            // Hitung jarak heuristik (Euclidean distance)
            $centerLat = -6.1390609;
            $centerLon = 106.2320029;
            $distance = sqrt(pow($item->latitude - $centerLat, 2) + pow($item->longitude - $centerLon, 2));
            echo "[{$item->id_kampus}, '{$item->nama_kampus}', '{$item->alamat}', {$item->longitude}, {$item->latitude}, {$distance}],";
        }
    }
    ?>
];

function setMarkers(map, locations) {
    var globalPin = 'img/univ.png';

    for (var i = 0; i < locations.length; i++) {
        var office = locations[i];
        var myLatLng = new google.maps.LatLng(office[4], office[3]);

        var contentString =
            '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h5 id="firstHeading" class="firstHeading">' + office[1] + '</h5>' +
            '<div id="bodyContent">' +
            '<p>Alamat: ' + office[2] + '</p>' +
            '<p>Jarak Heuristik: ' + office[5].toFixed(2) + ' km</p>' +
            '<a href=detail.php?id=' + office[0] + '>Info Detail</a>' +
            '</div>' +
            '</div>';

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(office[4], office[3]),
            map: map,
            title: office[1],
            icon: globalPin
        });

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        google.maps.event.addListener(marker, 'click', (function(marker, content) {
            return function() {
                infowindow.setContent(content);
                infowindow.open(map, marker);
            };
        })(marker, contentString));
    }
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
<?php include_once "footer.php"; ?>