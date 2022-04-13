<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="Home.php" class="text-light">Home</a></button>
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
        <button class="btn btn-primary my-5"><a href="login.php" class="text-light">Log out</a></button>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Date</th>
      <th scope="col">UserType</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <?php
    $sql = "Select * from `users`";
    $result = mysqli_query($con, $sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row ['id'];
            $name = $row ['fullname'];
            $email = $row ['email'];
            $password = $row ['password'];
            $date = $row ['created_at'];
            $usertype = $row['usertype'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$password.'</td>
            <td>'.$date.'</td>
            <td>'.$usertype.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
          </tr>';
        }
    }
  ?>
    </table>
    </div>
</body>
</html>