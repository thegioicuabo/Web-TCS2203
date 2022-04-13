<!-- <?php
$catagory = $_POST["catagory"];
$image = $_POST["image"];
$type = $_POST["type"];
// dua du lieu vao db- ket noi db
$conn= new mysqli('localhost','root','','idea');
// chèn du lieu
$sql="INSERT INTO post (description,file,type) VALUES ('$catagory','$image','$type')";
// $sql="INSERT INTO post (file) VALUES ('$image')";
// $sql="INSERT INTO post (type) VALUES ('$type')";
$result=$conn->query($sql);
if($result){
	echo 'Post Success';
	}	else{
echo 'Post Fail';
	}
//dong ket noi
//$conn->close();
?>
 -->
