<?php

session_start();

require_once('credentials.php');

function db_connect() {
 try {
   $dbh = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER,
				  DB_USER,
				  DB_PWD,
				  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

 } catch (PDOException $e) {
   echo "Error connecting to database";
   exit();
 }
 return $dbh;
}

function db_disconnect() {
  global $db;
  if (isset($db)) {
    $db = null;
  }
}

$db = db_connect();
?>

