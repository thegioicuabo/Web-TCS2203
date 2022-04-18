<?php
$con = mysqli_connect('localhost','root','','user');
$sql = "select * from post";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                    
                        <div class="card-header">
                            <h2></h2>
                        </div>
                        <div class="card-body">
                            <h3><?php 
                            $row=1;
                            $form=0;
                            $sql="SELECT * FROM post LIMIT $form,$row";
                            $result=$con->query($sql);
                            while($row=$result->fetch_assoc()){ 
                            echo $row['type'].": ";
                            echo $row['description'];
                            }?></h3> 

                            <h3><?php 
                            $row=1;
                            $form=1;
                            $sql="SELECT * FROM post LIMIT $form,$row";
                            $result=$con->query($sql);
                            while($row=$result->fetch_assoc()){
                            echo $row['type'].": ";
                            echo $row['description'];
                            }?></h3> 

<h3><?php 
                            $row=1;
                            $form=2;
                            $sql="SELECT * FROM post LIMIT $form,$row";
                            $result=$con->query($sql);
                            while($row=$result->fetch_assoc()){
                            echo $row['type'].": ";
                            echo $row['description'];
                            }?></h3> 

<h3><?php 
                            $row=1;
                            $form=3;
                            $sql="SELECT * FROM post LIMIT $form,$row";
                            $result=$con->query($sql);
                            while($row=$result->fetch_assoc()){
                            echo $row['type'].": ";
                            echo $row['description'];
                            }?></h3> 

<h3><?php 
                            $row=1;
                            $form=4;
                            $sql="SELECT * FROM post LIMIT $form,$row";
                            $result=$con->query($sql);
                            while($row=$result->fetch_assoc()){
                            echo $row['type'].": ";
                            echo $row['description'];
                            }?></h3> 
                            
                        <hr>
                            <div class="main-comment">
                                    <div id="error_status"></div>
                                <textarea class="comment_textbox form-control mb-1" rows="2"></textarea>
                                <button type="button" class="btn btn-primary add_comment_btn">Comment</button>
                                <hr>                         
                            <div class="comment-container">
                                </div>
                            </div>
                            <td><a href="Home.php">Home</td>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="custom.js"></script>
</body>
</html>