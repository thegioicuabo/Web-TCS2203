<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $date = $_POST['created_at'];
        $usertype = $_POST['usertype'];
        $sql = "insert into `users` (fullname, email, password, created_at, usertype) values('$name','$email','$password', '$date', '$usertype')";
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

    <title>Admin Page</title>
  </head>
    <body>
    <form method="post">
        <div class="container my-5">
        <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" placeholder="Your Name" name="fullname" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Your Email" name="email" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control"  placeholder="Password" name="password" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control"  placeholder="Date Time" name="created_at" autocomplete="off">
        </div>
        <div class="form-group">
            <label>UserType</label>
            <div class="select-box">
                    <select name="usertype" class="form-control" autocomplete="off">
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                        <option value="Q&A coordinator">Q&A coordinator</option>
                    </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </form>
    </body>
</html>