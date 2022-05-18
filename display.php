
<?php

include('db_connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application - Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="user.php" class="text-light">Sign Up</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">OPERATIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php

                  $sql_query = "SELECT * FROM `user_info`";

                  $execute_query = mysqli_query($connection, $sql_query);
                  if($execute_query) {
                      while($row = mysqli_fetch_assoc($execute_query)) {
                          $id = $row['id'];
                          $username = $row['username'];
                          $email = $row['email'];
                          $password = $row['password'];
                          echo '
                          <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$username.'</td>
                            <td>'.$email.'</td>
                            <td>'.$password. '</td>
                            <td>
                              <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">UPDATE</a></button>
                              <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">DELETE</a></button>
                            </td>
                          </tr>';
                      }
                  }

                ?>

                <!--
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                -->
            </tbody>
        </table>
    </div>
</body>

</html>