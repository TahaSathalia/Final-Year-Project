<?php 

	include "apat.php";
 ?>
<?php
require_once("db.php");
?>
<html>
<head>
<title>Test List</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <!-- Main Header -->
<header class="main-header">
    <img src="img/logo.png" alt="">
    <h1>DBZ Health Care</h1>
</header>
<nav>
    <ul>
        <li>
            <a href="patienthome.php" class="active">Home</a>
        </li>
       
        <!-- <li>
            <a href="viewbill.jsp">View Bill</a>
        </li> -->
        <li>
            <a href="lout.php">Logout</a>
        </li>
    </ul>
</nav>


<form name="frmUser" method="post" action="">
<div>
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<section style="padding-top: 100px; padding-left: 400px;">
<div align="right" style="padding-bottom:5px; padding-right: 300px;"><a href="addtest.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add Test</a></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm" >
<tr class="listheader">
<td>Test Name</td>
<td>Type Of Test</td>
<td>Amount</td>
<td>Date</td>
<td>Doctor</td>

</tr>
</section>
<?php
$a= $_SESSION['pid'];
$sql = "SELECT * FROM patient where uid= '$a'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["test"]. "</td>
		  <td>" . $row["type"] . "</td>
		  <td>". $row["amount"]. "</td> 
		  <td>". $row["adate"]. "</td>
		  <td>Dr ".  $row["docname"]. "</td>
	  </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</form>
</div>
</body></html>