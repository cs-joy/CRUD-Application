<?php

include('../../../dbConnection/db_setting.php');
$connection = new mysqli($hostname, $username, $password, $database_name);

if(!$connection) {
    //echo 'connected successfully';
    die(mysqli_error($connection));
}

?>