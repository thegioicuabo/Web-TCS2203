<?php
// dua du lieu vao db- ket noi db
$conn= new mysqli('localhost','root','','idea');
            if(isset($_POST['submit']))
            {
            if(isset($_POST['c']))
            {
                $conn = new mysqli('localhost','root','','idea');
// chèn du lieu
                if(isset($_POST['submit']))
    {
        $catagory = $_POST["catagory"];
        $upfil = $_POST["image"];
        $selec = $_POST["type"];
        $sql = "INSERT INTO post(description,file,type) VALUE('$catagory','$upfil','$selec')";
        $result = mysqli_query($conn,$sql);
    }
            }
            else
            {
                echo "Please Click on Term and Conditions ";
            }
            }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Greenwich FPT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="test.css">
    <style>
    *{
    padding: 0;
    margin: 0;
    }

    .comment-box{
        top:50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
        width: 500px;
    }

    .comment-box h2{
        font-size: 20px;
        margin-bottom: 15px;
    }

    .comment-box input{
        width: 100%;
        height: 50px;
        padding: 0 20px;
        margin-bottom:15px ;
        border-radius: 5px;
        border:1px solid #868686;
    }

    .comment-box input:focus{
        border: 1px solid #000;
        outline: 0;
    }

    .comment-box textarea{
        width: 100%;
        height: 150px;
        padding: 15px 20px;
        margin-bottom: 10px;
        border-radius: 10px;
        border: 1px solid #868686;
    }

    .comment-box button{
        border: 0;
        padding: 10px 30px;
        background: #86b0b6;
        font-size: 18px;
        border-radius: 5px;
        color: #fff;
    }

    .comment-box button:hover{
        background-color: #718a8e;
    }

    .container1{
        max-width: 1000px;
        margin: 0 auto;
    }

    .select-box{
        width: 300px;
        position: relative;
    }

    .select-box select{
        height: 42px;
        padding: 10px 15px;
        line-height: 18px;
        font-size: 16px;
        width: 100%;
        border: 2px solid #ccc;
        border-radius: 8px;
        -webkit-appearance: none;
        appearance: none;
    }

    .select-box::after{
        content: "";
        position: absolute;
        right: 8px;
        top: 50%;
        margin-top: -4px;
        border-top: 8px solid black;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        pointer-events: none;
    }

    .select-box select:focus{
        border: 2px solid green;
    }
    </style>
    
</head>
<body>
<nav class = "navbar">
        <div class = "container">
          <a href = "Home.php" class = "navbar-brand">Greenwich FPT</a>
          <div class = "navbar-nav">
            <a href = "Home.php"> <i class="fa fa-home"></i> home</a>
            <div class="dropdown">
              <a class="dropbtn"><i class="fa fa-align-justify"></i>Type</a>
              <div class="dropdown-content">
                <a href="blogpage1.html">Music</a>
                <a href="blogpage2.html">Fastion</a>
                <a href="blogpage3.html">Game E-Sport</a>
                <a href="blogpage4.html">Movie</a>
                <a href="blogpage5.html">Sports</a>
                <a href="blogpage6.html">Study</a>
              </div>
            </div>
            <a href = "Post.php"><i class="fa fa-arrow-up"></i>post</a>
            <a href = "View.php"><i class="fa fa-eye"></i>view</a>
            <a href = "about.html"><i class="fa fa-address-card"></i>about</a>
          </div>
        </div>
  </nav>
    <div class="comment-box">
        <h2>Idea</h2>
        <form action="#" method="post">
            <textarea type= "text" name="catagory" placeholder="Write your content ( Under 1000 digit )"></textarea>
            <!-- <li name="new_post" class="nav-item"> -->
                     <div id="content">  
                     <input type="hidden" name="size" value="1000000"> 
                     <input type="file" name="image">  
                     </div>
                     <div class="container1">
                <div class="select-box">
                    <select name="type" class="form-control">
                        <option value="Music">Music</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Game Esport">Game Esport</option>
                        <option value="Movie">Movie</option>
                        <option value="Sport">Sport</option>
                        <option value="Study">Study</option>
                    </select>
                </div>
                <!-- <select name="detail" class="form-control">
                        <option value="detail">Detail</option>
                    </select> -->
            </div>  
           <form action ="" method="post">
                <input type="checkbox" name="c"> Term and Conditions 
            <br>
            <input type="submit" name="submit" value="Submit"></input>
            <br>
            </form> 
        </form>
    </div>
</body>
</html>