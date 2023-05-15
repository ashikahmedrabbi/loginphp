<?php
echo "Welcome to the home page";
require('conn.php');
if(isset($_POST['Name'])){
$name = $_POST['Name'];
$email = $_POST['email'];
$sql = "INSERT INTO ashik VALUES ('','$name','$email')";
$sql_query = mysqli_query ($con,$sql);
}

?>

<form action="home.php" method ="POST">
Name:<input type="text" name="Name"> <br> <br>
Email:<input type="text" name="email">
<input type="submit" value="submit">
</form>