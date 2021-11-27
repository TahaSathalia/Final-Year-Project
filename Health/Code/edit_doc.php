<?php
include "auth.php";
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE doctor set dname='" . $_POST["userName"] . "', spec='" . $_POST["firstName"] . "', fees='" . $_POST["lastName"] . "' WHERE id='" . $_POST["userId"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM doctor WHERE id='" . $_GET["userId"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Doctor</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:80%;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<section style="padding-top: 100px; padding-left: 400px;">
<div align="right" style="padding-bottom:5px; padding-right: 220px;"><a href="doc.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Doctor</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Doctor</td>
</tr>
<tr>
<td><label>Doctor Name</label></td>
<td><input type="hidden" style="color: black;" name="userId" class="txtField" value="<?php echo $row['id']; ?>">
	<input type="text" style="color: black;" name="userName" class="txtField" value="<?php echo $row['dname']; ?>"></td>
</tr>
<tr>
<td><label>Specialization</label></td>
<td><input type="text" style="color: black;" name="firstName" class="txtField" value="<?php echo $row['spec']; ?>"></td>
</tr>
<td><label>Fees</label></td>
<td><input type="text" style="color: black;" name="lastName" class="txtField" value="<?php echo $row['fees']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</section>
</form>
</body></html>