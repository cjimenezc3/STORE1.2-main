
<?php
define("USER", "storeadmin");
define("SERVER", "storegrupo33.database.windows.net");
define("BD", "store");
define("PASS", "Thebest2527");

//Initializes MySQLi
$conn = mysqli_init();

//mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'storegrupo33.database.windows.net', 'storeadmin', 'Thebest2527', 'store', 1433, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


/*





/*
<?php
define("USER", "root");
define("SERVER", "localhost");
define("BD", "store");
define("PASS", "Thebest2527");*/
