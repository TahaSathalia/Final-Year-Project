<?php
// Start the session
session_start();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbz";
$ar=array();
$i=0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$usrname=$_POST['uname'];
$password=$_POST['pass'];

$query = "SELECT * FROM reg WHERE username = '$usrname' AND password = '$password' ";
$result = mysqli_query($conn,$query);

	$session_id=session_id();
	$_SESSION['auth']=$session_id;
if(mysqli_num_rows($result)>0)
{
	while($row= mysqli_fetch_assoc($result))
	{
		if ($row["role"] == "Admin") 
		{
				$_SESSION['role'] = $row["role"];
				$_SESSION['aname'] = $row["Name"];			
				$_SESSION['aid'] = $row["id"];
				$_SESSION['ADM'] = $row["username"];
				header('Location: add.php');
		}
		else if ($row["role"]== "Doctor") 
		{
				$_SESSION['role'] = $row["role"];
				$_SESSION['dname'] = $row["Name"];
				$_SESSION['did'] = $row["id"];
				$_SESSION['DOCTOR'] = $row["username"];
				header('Location: doctor.php');
		}
		else
		{
			$_SESSION['role'] = $row["role"];
			$_SESSION['pname'] = $row["Name"];
			$_SESSION['pid'] = $row["id"];
			$_SESSION['PAT'] = $row["username"];
			$_SESSION['con'] = $row["contact"];
			header('Location: patienthome.php');
		}
	}
}
else
{
	$message = "Invalid username or password";
	header("Location : index.php");
}



?>