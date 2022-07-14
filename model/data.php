<?php
define('DBSERVER', 'localhost'); // Database server
define('DBUSERNAME', 'root'); // Database username
define('DBPASSWORD', ''); // Database password
define('DBNAME', 'quanlynhahang'); // Database name
 
/* connect to MySQL database */
$conn = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);
 
// Check db connection
if($conn === false){
    die("Error: connection error. " . mysqli_connect_error());
}
?>