<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem danh sách chuyên mục</title>

</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td>ID</td>
                <td>Content</td>
				<td>File</td>
				<td>Type</td>
</tr>
<?php
$conn= new mysqli('localhost','root','','idea');
if(isset($_GET['page'])){
$page =$_GET['page'];
}else{
	$page =2;

}
$row=5;
$form=($page-1) * $row;
$sql="SELECT * FROM post LIMIT $form,$row";
$result=$conn->query($sql);
$stt=1;
while($row=$result->fetch_assoc()){
	echo
	"<tr>
                <td>".$stt++."</td>
                <td>".$row['description']."</td>
				<td>".$row['file']."</td>
				<td>".$row['type']."</td>
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
</body>
</html>