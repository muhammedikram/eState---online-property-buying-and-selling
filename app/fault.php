<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connection
$conn = new mysqli($servername, $username, $password);
mysql_select_db('test');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<form action="fault.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" id="image">
    <input type="submit" value="Upload Image" name="submit">
</form>


<?php
if(isset($_POST['submit'])) {

$image_name = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

if($image_name==''){
	echo "Please select an image";
	exit();

}else {
	move_uploaded_file($image_tmp, "/xampp/htdocs/fault/$image_name");
	echo "Image uploaded successfully";

	 $sql = "INSERT INTO fault (image) VALUES ('$image_name')";
      
  
   $retval = mysql_query( $sql);
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
}


}
?>





