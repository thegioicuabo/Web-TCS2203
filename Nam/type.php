<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Types</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="Home.php" class="text-light">Home</a></button>
        <button class="btn btn-primary my-5"><a href="blog.php" class="text-light">Add Type</a></button>
        <button class="btn btn-primary my-5"><a href="login.php" class="text-light">Log out</a></button>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Type</th>
      <th scope="col">Date</th> 
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <?php
    $sql = "Select * from `type`";
    $result = mysqli_query($con, $sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row ['id'];
            $name = $row ['name'];
            $detail = $row ['detail'];
            $type = $row ['type'];
            $date = $row ['date'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$detail.'</td>
            <td>'.$type.'</td>
            <td>'.$date.'</td>
            <td>
            <button class="btn btn-primary"><a href="updateblog.php?updateid='.$id.'" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="deleteblog.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
          </tr>';
        }
    }
  ?>
    </table>
    </div>
</body>
</html>