<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name=$_POST['name'];
$cont=$_POST['mob'];
$username=$_POST['uname'];
$password=$_POST['pass'];
$role = $_POST['role'];
$duplicate=mysqli_query($conn,"select * from reg where username='$username' ");
if (mysqli_num_rows($duplicate)>0)
{
	echo "<script>
		alert('username already taken');
		location.replace('index.php');
		</script>";
}
else{

$sql = "INSERT INTO reg (Name, username, password, contact, role)
VALUES ('$name','$username', '$password', '$cont' , '$role')";

if ($conn->query($sql) === TRUE) {
	echo "<script>
		alert('Now, Login');
		location.replace('index.php');
		</script>";
	exit;
}
else {
	echo "<script>
		alert('Error');
		</script>";
	header("Location:signup.php"); 
	exit;

}
}
$conn->close();

?>
