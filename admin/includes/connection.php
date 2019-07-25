<?php

$server     = "localhost";
$username   = "root";
$password   = "w1i2n3d4";
$db         = "betabet";

// create a connection
$conn = mysqli_connect( $server, $username, $password, $db );

// check connection
if( !$conn ) {
    die( "Connection failed: " . mysqli_connect_error() );
}

?> 