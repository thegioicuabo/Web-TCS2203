<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="test.css">
    <title>View category list</title>
<style>
  tr,td{
    border: 1px solid black;
  }
  .container1{
        max-width: 600px;
        margin: 0 auto;
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
            <a href = "about.php"><i class="fa fa-address-card"></i>about</a>
          </div>
        </div>
  </nav>
    <div class="container1 my-5">
        <table>
            <tr>
                <td>Content</td>
                <br><br>
				        <td>File</td>
				        <td>Type</td>
                <td>Date Created</td>
                <td><a href="blogcomment.php">Link</td>   
</tr>
<?php
$conn= new mysqli('localhost','root','','user');
if(isset($_GET['pages'])){
$pages =$_GET['pages'];
}else{
	$pages =5;

}
$row=5;
$form=($pages-1) * $row;
$sql="SELECT * FROM post LIMIT $form,$row";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
	echo
	"<tr>
                <td>".$row['description']."</td>
				        <td>".$row['file']."</td>
				        <td>".$row['type']."</td>
                <td>".$row['Date']."</td>
                <td>".$row['Link']."</td>
</tr>";
}
?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="View.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Viewpage2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Viewpage3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Viewpage4.php">4</a></li>
    <li class="page-item"><a class="page-link" href="Viewpage5.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Viewpage6.php">6</a></li>
    <li class="page-item"><a class="page-link" href="Viewpage7.php#">7</a></li>
    <li class="page-item"><a class="page-link" href="Viewpage8.php">8</a></li>
    <li class="page-item"><a class="page-link" href="Viewpage9.php">9</a></li>
    <li class="page-item"><a class="page-link" href="Viewpage10.php">10</a></li>

    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</body>
</html>