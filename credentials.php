<?php

// Define your database credentials as constants 
// (see 6.2 in the zyBook for refresher on constants)
define("DB_SERVER", "localhost");
define("DB_NAME", "team6"); // Because the name of your database is your username
define("DB_USER", "team6" );
define("DB_PWD", "j389");
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
