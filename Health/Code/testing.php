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

$tname= $_POST['test'];
$date = $_POST['date'];
$id= $_SESSION['pid'];
$doc=$_POST['doc'];


$query = "SELECT * FROM users WHERE test = '$tname' ";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{
    while($row= mysqli_fetch_assoc($result))
    {
           $sql = "INSERT INTO patient (uid,pname,test, type, amount, adate, docname, contact) VALUES ('" .$_SESSION['pid']."','" .$_SESSION['pname']."','" . $row["test"] . "','" . $row["type"] . "','" . $row["amount"] . "','" . $_POST["date"] . "','". $_POST["doc"] . "','" .$_SESSION['con']."')";
     mysqli_query($conn,$sql);
    header("Location:booktest.php");
    }
}

?>

</body>
</html>

















































