<?php
define('DBSERVER', 'localhost'); //Database server
define('DBUSERNAME', 'root'); // Database username
define('DBPASSWORD', ''); // Database Password
define('DBNAME', 'demo'); // Database name

/* connect to MySQL database */
$db = mysqli_connect(DBSERVER, DBUSERNME, DBPASSWORD, DBNAME);

// Chech db connection
if($db == false){
    die("Error: connection error. Please try again.".mysqli_connect_error());
}
?>