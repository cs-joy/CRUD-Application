<?php
 include('db_connection.php');
 
 if(isset($_GET['deleteid'])) {
     $id = $_GET['deleteid'];

    $sql_query = "DELETE FROM `user_info` WHERE (`id`='$id')";

    $executing_query = mysqli_query($connection, $sql_query);

    if ($executing_query) {
        echo "Data Removed Successfully";
    } else {
        die(mysqli_error($connection));
    }
}

?>