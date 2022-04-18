<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $detail = $_POST['detail'];
        $type = $_POST['type'];
        $date = $_POST['date'];
        $sql = "insert into `type` (name, detail, type, date) values('$name','$detail','$type', '$date')";
        $result = mysqli_query($con, $sql);
        if($result){
            header('location:type.php');
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

    <title>Type Page</title>
  </head>
    <body>
    <form method="post">
        <div class="container my-5">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Name Blog" name="name" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Details</label>
            <input type="text" class="form-control" placeholder="Detail Blog" name="detail" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Type</label>
            <div class="select-box">
                    <select name="type" class="form-control" autocomplete="off" value=<?php echo $type;?>>
                        <option value="Music">Music</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Game Esport">Game Esport</option>
                        <option value="Movie">Movie</option>
                        <option value="Sport">Sport</option>
                        <option value="Study">Study</option>
                    </select>
            </div>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control"  placeholder="Date Time" name="date" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </form>
    </body>
</html>