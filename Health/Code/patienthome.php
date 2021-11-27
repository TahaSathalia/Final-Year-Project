<?php
    include "apat.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DBZ Health Care</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<!-- Main Header -->
<header class="main-header">
    <img src="img/logo.png" alt="">
    <h1>DBZ Health Care</h1>
</header>
<!-- Navbar -->
<nav>
    <ul>
        <li>
            <a href="patienthome.php" class="active">Home</a>
        </li>
        <li>
            <a href="booktest.php">Book Test</a>
        </li>
        <!-- <li>
            <a href="viewbill.jsp">View Bill</a>
        </li> -->
        <li>
            <a href="lout.php">Logout</a>
        </li>
    </ul>
</nav>
<center style="padding-top: 100px;"><h1>Welcome <?php echo $_SESSION['pname'];?></h1>

<br>
<br>
<form name="frmUser" method="post" action="">
<div style="width:1000px; padding-inline-start: 30px;">
 <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
</center>

<center>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "dbz");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT test, type, amount FROM users";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='0' cellpadding='10' cellspacing='1' width='500' class='tblListForm'>";
            echo "<tr class='listheader' style='color: black;'>";
                echo "<td>Test Name</td>";
                echo "<td>Type Of Test</td>";
                echo "<td>Amount</td>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['test'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</center>
</div>
</form></center></body></html>