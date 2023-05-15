
<?php
require('conn.php');
if(isset($_POST['user'])) && isset($_POST['pass']){
$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM ashik WHERE user='$user' AND pass='$pass'";
$sql_query = mysqli_query ($con,$sql);
$my_sqli_num_rows = mysqli_num_rows($sql_query);
if(mysqli_num_rows){
echo "Login Successful";
}
else{
echo "Login Failed";
}
}
?>






<form action="login.php" method ="POST">
User:<input type="text" name="user"> <br> <br>
Pass:<input type="password" name="pass">
<input type="submit" value="Login">
</form>