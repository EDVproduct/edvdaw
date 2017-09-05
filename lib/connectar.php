<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "casa_rural";
$port = 3306;
$params = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
try{
  $conn = new PDO("mysql:host=$host;port=$port;dbname=$db",$user,$pass,$params);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
  echo "<p>Impossible establir la connexió: " . $e->getMessage() ."</p>";
}
?>