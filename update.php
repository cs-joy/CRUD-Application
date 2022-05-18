
<?php

include('db_connection.php');

$id = $_GET['updateid'];
$sql_query = "SELECT * FROM `user_info` WHERE id=$id";
$executing_query = mysqli_query($connection, $sql_query);
$row = mysqli_fetch_assoc($executing_query);
$username= $row['username'];
$email = $row['email'];
$password = $row['password'];

if(isset($_POST['update'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "UPDATE `user_info` SET id=$id, username='$username', email='$email', password='$password' WHERE id=$id";

    $result = mysqli_query($connection, $sql_query);

    if ($result) {
        echo "Updated Successfully";
        //header('location:display.php');
    } else {
        die(mysqli_error($connection));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter your username" autocomplete="off" value=<?php echo $username; ?> >
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" value=<?php echo $email; ?> >
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off" value=<?php echo $password; ?>>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>