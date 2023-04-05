<?php
	function conexion(){
	$host = "host=containers-us-west-191.railway.app";
	$port = "port=5624";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=xrtXMPoJ4Ch9HFeH1Bex";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>