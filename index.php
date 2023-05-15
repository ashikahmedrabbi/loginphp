<?php
require('conn.php');
if(isset($_POST['Name'])){
$name = $_POST['Name'];
$sql = "INSERT INTO data1 VALUES ('$name')";
$sql_query = mysqli_query ($con,$sql);
}
?>



<form action="index.php" method ="POST">
Name:<input type="text" name="Name">
<input type="submit" value="submit">
</form>