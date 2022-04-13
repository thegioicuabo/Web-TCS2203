<?php
    include 'connect.php';
    $id = $_GET['updateid'];
    $sql = "Select * from `users` where id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row ['fullname'];
    $email = $row ['email'];
    $password = $row ['password'];
    $date = $row ['created_at'];
    $usertype = $row['usertype'];

    if(isset($_POST['submit'])){
        $name = $_POST ['fullname'];
        $email = $_POST ['email'];
        $password = $_POST ['password'];
        $date = $_POST ['created_at'];
        $usertype = $_POST['usertype'];
        $sql = "update `users` set id = $id, fullname = '$name', email = '$email', password = '$password', created_at = '$date' , usertype = '$usertype' where id=$id";
        $result = mysqli_query($con, $sql);
        if($result){
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Addmin Page</title>
  </head>
    <body>
    <form method="post">
        <div class="container my-5">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Your Name" name="fullname" autocomplete="off" value=<?php echo $name;?>>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Your Email" name="email" autocomplete="off" value=<?php echo $email;?>>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control"  placeholder="Password" name="password" autocomplete="off" value=<?php echo $password;?>>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control"  placeholder="Date Time" name="created_at" autocomplete="off" value=<?php echo $date;?>>
        </div>
        <div class="form-group">
            <label>UserType</label>
            <input type="text" class="form-control"  placeholder="Your Type" name="usertype" autocomplete="off" value=<?php echo $usertype;?>>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </div>
    </form>
    </body>
</html>