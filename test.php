formular html


<?php

	$year = 
	$yearTo = 
	$url = file_get_contents('http://api.nobelprize.org/v1/prize.json?year=1990&yearTo=2000&category=economics');
	$array = json_decode($url,true);

	var_dump($array);
	echo($array['prizes'][0]['year']);

?>