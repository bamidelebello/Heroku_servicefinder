<?php
session_start();
//date_default_timezone_set('Indian/Antananarivo');
define('dbhost', 'localhost');
define('dbuser', 'root');
define('dbpass', 'admin@123');
define('dbname', 'service_finder');
//create connecting string 
//protected $connect;
try{
     
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
       echo "Error ".$e->getMessage();
}


class Database
{
	public $connection;
	function __construct()
	{
	  $this->connection =mysqli_connect("localhost","root","admin@123","service_finder");
	}
}

