<?php
	function conexion(){
	$host = "host=containers-us-west-38.railway.app";
	$port = "port=8029";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=JIcL9swq3Y5O3TS911yU";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>