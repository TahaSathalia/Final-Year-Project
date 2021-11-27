<?php
include "auth.php";
require_once("db.php");
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
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
<form name="frmUser" method="post" action="">
<div style="width: 80%">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<section style="padding-top: 100px; padding-left: 400px;">
<div align="right" style="padding-bottom:5px; padding-right: 220px;"><a href="add_user.php" class="link"><img alt='Add' title='Add' src='images/add.png' width='15px' height='15px'/> Add Test</a></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm" >
<tr class="listheader">
<td>Test Name</td>
<td>Type Of Test</td>
<td>Amount</td>
<td>Edit Field</td>
</tr>
</section>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["test"]; ?></td>
<td><?php echo $row["type"]; ?></td>
<td><?php echo $row["amount"]; ?></td>
<td><a href="edit_user.php?userId=<?php echo $row["userId"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  <a href="delete_user.php?userId=<?php echo $row["userId"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
</div>
</body></html>