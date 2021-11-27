<?php
require_once("db.php");
$sql = "DELETE FROM doctor WHERE id='" . $_GET["userId"] . "'";
mysqli_query($conn,$sql);
header("Location:doc.php");
?>