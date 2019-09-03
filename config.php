<?php

define('DB_SERVER', 'shareddb-q.hosting.stackcp.net');
define('DB_USERNAME', 'Becas-Utec-313137a31c');
define('DB_PASSWORD', 'gda8of5qxy');
define('DB_NAME', 'Becas-Utec-313137a31c');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>