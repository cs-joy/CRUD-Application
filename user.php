
<?php

include('db_connection.php');
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "INSERT INTO `user_info` (`username`, `email`, `password`) VALUES('$username', '$email', '$password')";

    $result = mysqli_query($connection, $sql_query);

    if ($result) {
        //echo "Data Inserted Successfully";
        header('location:display.php');
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
    <title>CRUD Application - User Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter your username" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" >
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>