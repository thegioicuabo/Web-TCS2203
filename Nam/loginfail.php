<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="SELECT * FROM login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql) or die(mysqli_error($data));

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:Home.html");
	}

	else if($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:admin.php");
	}

	else
	{
		header("location:loginfail.php");
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <?php include 'links.php'?>
    <style>
        *{
    margin: 0;
    padding: 0;
}
.center-div{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.heading{
    width: 100%;
    line-height: 80px;
    font-size: 1.4rem;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    font-family: 'Lobster', cursive;
}
form{
    width: 400px;
}
    </style>
    <title>Log In Account</title>
</head>
<body>
 <header>
    <div class = " container center-div shadow">
        <div class="heading text-center mb-5 text-uppercase text-white"> Admin Log In Page </div>
            <div class="container row d-flex flex-row justify-content-center mb-5">
                <div class="admin-form">
                    <form action="#" method = "POST">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="username" value="" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" value="" class="form-control" autocomplete="off">
                        </div>
                        <h5>Email or password is not correct, please input again!!</h5>
                    <input type="submit" class="btn btn-success" name="" value="Login">
                    </form>
            </div>
        </div>
    </div>
 </header>
</body>
</html>