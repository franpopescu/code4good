<?php

	
    $region = $_POST['Region'];
    $country = $_POST['Country'];
    $gender = $_POST['Gender'];
    $from = $_POST['From'];
    $to = $_POST['To'];
/*
    $europe = array (
		"Austria" => "AU",
		"Belgium" => "BE",
		"Bosnia" => "BA",
		"Bulgaria" => "BG",
		"Denmark" => "DE",
		"Faroe Islands" => "FO",
		"Finland" => "FI",
		"France" => "FR",
		"Germany" => "DE",
		"Greece" => "GR",
		"Hungary" => "HU",
		"Iceland" => "IS",
		"Ireland" => "IR",
		"Italy" => "IT",
		"Lithuania" => "LT",
		"Luxembourg" => "LU",
		"Northern Ireland" => "IE",
		"Norway" => "NO",
		"Poland" => "PL",
		"Portugal" => "PT",
		"Romania" => "RO",
		"Russia" => "RU",
		"Spain" => "ES",
		"Sweden" => "SE",
		"Switzerland" => "CH",
		"the Netherlands" => "NL",
		"Turkey" => "TR",
		"United Kingdom" => "UK",
		);

		
	$america = array(
		"Argentina" => "AR",
		"Barbados" => "BB",
		"Canada" => "CA",
		"Chile" => "CL",
		"Colombia" => "CO",
		"Costa Rica" => "CR",
		"Guatemala" => "GT",
		"Mexico" => "MX",
		"Peru" => "PE",
		"Saint Lucia" => "LC",
		"USA" => "US",
		);

	$oceania = array(

		"Australia" => "AU",
	    "New Zealand" => "NZ",
	  );

	$asia = array(

			"Azerbaijan" => "AZ",
			"Bangladesh" => "BD",
			"Democratic Republic of Vietnam" => "VN",
			"India" => "IN",
			"Indonesia" => "ID",
			"Iran" => "IR",
			"Japan" => "JP",
			"Korea" => "KP",
			"Myanmar" => "MM",
			"Pakistan" => "PK",
			"Taiwan" => "TW",
			"Tibet" => "CN",
			"Yemen" => "YE"
	  );

	$africa = array(

		"Algeria" => "DZ",
		"Egypt" => "EG",
		"Ghana" => "GH",
		"Kenya" => "KE",
		"Madagascar" => "MG",
		"Nigeria" => "NG",
		"South Africa" => "ZA",
	);*/

	$cacat = array(
		"DZ" => array(
			0 => 3.0000,
			1 => 28.0000
			),
		"EG" => array(
			0 => 30.0000,
			1 => 27.0000
			),
		"GH" => array(
			0 => -2.0000,
			1 => 8.0000
			),
		"KE" => array(
			0 => 38.0000,
			1 => 1.0000
			),
		"MG" => array(
			0 => 47.0000,
			1 => -20.0000
			),
		"NG" => array(
			0 => 8.0000,
			1 => 10.0000
			),
		"ZA" => array(
			0 => 24.0000,
			1 => -29.0000
			),
		"AU" => array(
			0 => 133.0000,
			1 => -27.0000
			),
		"NZ" => array(
			0 => 174.0000,
			1 => -41.000
			),
		"AZ" => array(
			0 => 47.5000,
			1 => 40.5000
			),
		"BD" => array(
			0 => 90.0000, 
			1 => 24.0000
			),
		"VN" => array(
			0 => 106.0000,
			1 => 16.0000
			),
		"IN" => array(
			0 => 77.0000,
			1 => 20.0000
			),
		"ID" => array(
			0 => 120.0000,
			1 => -5.0000
			),
		"IR" => array(
			0 => 53.0000,
			1 => 32.0000
			),
		"JP" => array(
			0 => 138.0000,
			1 => 36.0000
			),
		"KP" => array(
			0 => 127.0000,
			1 => 40.0000
			),
		"MM" => array(
			0 => 98.000,
			1 => 22.000
			),
		"PK" => array(
			0 => 70.0000,
			1 => 30.0000
			),
		"TW" => array(
			0 => 121.0000,
			1 => 23.5000
			),
		"CN" => array(
			0 => 105.0000,
			1 => 35.0000
			),
		"YE" => array(
			0 => 48.0000,
			1 => 15.000
			),
		"LC" => array(
			0 => -61.1333,
			1 => 13.8333
			),
		"US" => array(
			0 => -97.0000,
			1 => 38.0000
			),
		  "AU" => array(
		  	0  => 133.0000,
		  	1  => -27.0000
		  	),
		  "BE" => array(
		  	0  => 4.0000,
		  	1 => 50.8333
		  	),
		  "BA" => array(
		  	0  => 18.0000,
		  	1 => 44.0000
		  	),
		  "BG" => array(
		  	0 => 25.0000,
		  	1 => 43.0000
		  	),
		 "DE" => array(
		  	0 => 9.0000,
		  	1 => 51.0000
		  	),
		  "FO" => array(
		  	0 => -7.0000,
		  	1 => 62.0000
		  	),
		  "FI" => array(
		  	0 => 26.0000,
		  	1 => 64.0000
		  	),
		  "FR" => array(
		  	0 => 2.0000,
		  	1 => 46.0000
		  	),
		  "DE" => array(
		  	0 => 9.0000,
		  	1 => 51.0000
		  	),
		  "GR" => array(
		  	0 => 22.0000,
		  	1 => 39.0000
		  	),
		  "HU" => array(
		  	0 => 20.0000,
		  	1 => 47.0000
		  	),
		  "IS" => array(
		  	0 => -18.0000,
		  	1 => 65.0000
		  	),
		  "IR" => array(
		  	0 => 53.0000,
		  	1 => 32.0000
		  	),
		  "IT" => array(
		  	0 => 12.8333,
		  	1 => 42.8333
		  	),
		  "LT" => array(
		  	0 => 24.0000,
		  	1 => 56.0000
		  	),
		  "LU" => array(
		  	0 => 6.1667,
		  	1 => 49.7500
		  	),
		  "IE" => array(
		  	0 => -8.0000,
		  	1 => 53.0000
		  	),
		  "NO" => array(
		  	0 => 10.0000,
		  	1 => 62.0000
		  	),
		  "PL" => array(
		  	0 => 20.0000,
		  	1 => 52.0000
		  	),
		  "PT" => array(
		  	0 => -8.0000,
		  	1 => 39.5000
		  	),
		  "RO" => array(
		  	0 => 100.0000,
		  	1 => 60.0000
		  	),
		  "RU" => array(
		  	0 => -8.0000,
		  	1 => 39.5000
		  	),
		  "ES" => array(
		  	0 => -4.0000,
		  	1 => 40.0000
		  	),
		  "SE" => array(
		  	0 => 15.0000,
		  	1 => 62.0000
		  	),
		  "CH" => array(
		  	0 => 8.0000,
		  	1 => 47.0000
		  	),
		  "NL" => array(
		  	0 => 5.7500,
		  	1 => 52.5000
		  	),
		  "TR" => array(
		  	0 => 35.0000,
		  	1 => 39.0000
		  	),
		  "UK" => array(
		  	0 => -2.0000,
		  	1 => 54.0000
		  	),
		  "AR" => array(
		  	0 => -64.0000,
		  	1 => -34.0000
		  	),
		  "BB" => array(
		  	0 => -59.5333,
		  	1 => 13.1667
		  	),
		  "CA" => array(
		  	0 => -95.0000,
		  	1 => 60.0000
		  	),
		   "CL" => array(
		  	0 => -71.0000,
		  	1 => -30.0000
		  	),
		    "CO" => array(
		  	0 => -72.0000,
		  	1 => 4.0000
		  	),
		  	"CR" => array(
		  	0 => -84.0000,
		  	1 => 10.0000
		  	),
		  	"GT" => array(
		  	0 => -90.2500,
		  	1 => 15.5000
		  	),
		  	"MX" => array(
		  	0 => -102.0000,
		  	1 => 23.0000
		  	),
		  	"PE" => array(
		  	0 => -76.0000,
		  	1 => -10.0000
		  	)

	);

    echo($region);
    echo("<br/>");
    echo($country);
    echo("<br/>");
    echo($gender);
    echo("<br/>");
    echo($from);
    echo("<br/>");
    echo($to);
	$url = file_get_contents('http://api.nobelprize.org/v1/laureate.json?bornCountry='.$country.'&gender='.$gender);
	$url2=file_get_contents('http://api.nobelprize.org/v1/prize.json?year='.$from.'&yearTo='.$to);

	$array = json_decode($url,true);
	$array2 = json_decode($url2, true);



	var_dump($array);
	echo("----------------------------");
	echo("<br>");

	$length = count($array['laureates']);
	$length2 = count($array2['prizes']);

	//echo $array['laureates'][0]['id'];
	//echo $array2['prizes'][0]['laureates'][0]['id'];
	//	echo $array2['prizes'][1]['laureates'][0]['id'];


	for($i = 0; $i < $length; $i++)
		for($j = 0; $j < $length2; $j++){
			if($array2['prizes'][$j]['laureates'][0]['id'] == $array['laureates'][$i]['id']) {
				echo($array['laureates'][$i]['firstname']);
				echo(" ".$array['laureates'][$i]['surname']." | ");
				echo(" ".$array['laureates'][$i]['born']." | ");
				echo(" ".$array['laureates'][$i]['died']." | ");
				echo(" ".$array['laureates'][$i]['bornCountryCode']." | ");
				echo(" ".$array['laureates'][$i]['prizes'][0]['year']." | ");
				echo(" ".$array['laureates'][$i]['prizes'][0]['category']." | ");
				echo "<br>";
			}
	}



    //echo $_POST['Region'];
    //echo '<br />';
    //echo $_POST['Country'];
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map_canvas {
        height: 90%;
        margin: 10px;
        padding: 20px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer.js"></script>

    <script>
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see a blank space instead of the map, this
// is probably because you have denied permission for location sharing.

var map;
var jsonObject = null;
  var markerCluster = null;
  var markers = [];
  var bounds = new google.maps.LatLngBounds();

function initialize() {
  var mapOptions = {
    zoom: 6
  };
  map = new google.maps.Map(document.getElementById('map_canvas'),
      mapOptions);

  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'You are here'
      });
	  

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
  processJSON(
				{
					 "type": "FeatureCollection",
					    "features": [
  <?php   
  	$variable = false;
  		$incrementcCoords = 0;
		 for($i = 0; $i < $length; $i++){
		 		for($j = 0; $j < $length2; $j++){
		 			$incrementcCoords += 0.00002;
					if($array2['prizes'][$j]['laureates'][0]['id'] == $array['laureates'][$i]['id']) {
			

					  /*	if($variable == true){
					  		echo ",";
					  	}
					  	else{
					  		$variable = true;
					  	}*/
				?>

					      {
					        "id": "<?php echo $array['laureates'][$i]['firstname']." ".$array['laureates'][$i]['surname']; ?>",
					        "geometry": {
					          "type": "Point",
					          "coordinates": [
					            "<?php echo $cacat[$array['laureates'][$i]['bornCountryCode']][0] + $incrementcCoords; ?> ","<?php
					            		echo $cacat[$array['laureates'][$i]['bornCountryCode']][1]+ $incrementcCoords;
					             ?>"
					          ]
					        },
					        "geometry_name": "the_geom",
					        "properties": {
					          "Date of Birth": "<?php echo $array['laureates'][$i]['born']; ?>",
					          "Date of Death": "<?php echo $array['laureates'][$i]['died']; ?>",
					          "Category": "<?php $array['laureates'][$i]['prizes'][0]['category']; ?>",
					          "Year of award": "<?php echo $array['laureates'][$i]['prizes'][0]['year']; ?>",
					        }
					      },  
					  

			<?php }}} ?>
					  ],
					  "crs": {
					    "type": "EPSG",
					    "properties": {
					      "code": "4326"
					    }
					  },
					  "bbox": [
					    -0.291383,
					    51.464355,
					    0.0633,
					    51.562771
					  ]} 

						);
				
			

		}

	

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(50, 50),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}
  var jsonObject = null;
  var markerCluster = null;
  var markers = [];
  var bounds = new google.maps.LatLngBounds();
 function processJSON(jsonData) {
    jsonObject = jsonData;
    for (var i = 0, feature; feature = jsonObject.features[i]; i++) {
      if (feature.geometry) {
        var marker = new google.maps.Marker({
          fid: i,
          position: new google.maps.LatLng(
            feature.geometry.coordinates[1], 
            feature.geometry.coordinates[0]
          )
        });
        bounds.extend(marker.position)
        markers.push(marker);
        google.maps.event.addListener(marker, 'click', function(e) {
          var feature = jsonObject.features[this.fid];
          var infoHtml = "\x3Ch4>" + feature.id + "\x3C/h4>\x3Cul>";
          for (var name in feature.properties) {
            if (feature.properties.hasOwnProperty(name)) {
              infoHtml = infoHtml + "\x3Cli>\x3Cstrong>" + name + "\x3C/strong>: " + feature.properties[name] + "\x3C/li>";
            }
          }
          infoHtml = infoHtml + "\x3C/ul>";
		  
		  
		  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    //content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
		  
          infowindow.setContent(infoHtml);
          infowindow.open(map, this);
        });
      }
      console.log(i);
    }
    markerCluster = new MarkerClusterer(map, markers);
    map.fitBounds(bounds);
    console.log(markers);
  }

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
	<!--<script type='text/javascript' src='http://www.vukunetlabs.com/wp-content/plugins/wp-ajax-proxy/proxy.php?proxy_url=http://goo.gl/ULgib'></script>-->
  </head>
  <body>
    <div id="map_canvas"></div>
  </body>
</html>