<?php
	include "connect.php";
	$sql1 = "SELECT *, cities.id AS id_cities, cities.name AS cities_name, countries.name AS countries_name 
			FROM cities
			JOIN countries
			ON cities.id_countries=countries.id;
	";

	$sql2 = "SELECT * FROM countries";

	$query1 = mysql_query($sql1);
	$query2 = mysql_query($sql2);

	while($dt1=mysql_fetch_array($query1)){
		$cities[] = array(
				"id_city"=>$dt1["id_cities"],
				"city_name"=>$dt1["cities_name"],
				"country_name"=>$dt1["countries_name"],
			);
	}

	while($dt2=mysql_fetch_array($query2)){
		$countries[] = array(
				"id_country"=>$dt2["id"],
				"country_name"=>$dt2["name"]
			);
	}

	$json = [
			'result'=>'Success',
			'countries'=>$countries;
		];

	echo json_encode($json);
?>