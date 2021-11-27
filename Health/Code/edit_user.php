<?php
include "auth.php";
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE users set test='" . $_POST["userName"] . "', type='" . $_POST["firstName"] . "', amount='" . $_POST["lastName"] . "' WHERE userId='" . $_POST["userId"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM users WHERE userId='" . $_GET["userId"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
<html>
<head>
<title>Edit Test</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header class="main-header">
    <img src="img/logo.png" alt="">
    <h1>DBZ Health Care</h1>
</header>

<form name="frmUser" method="post" action="">
<div style="width:80%;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<section style="padding-top: 100px; padding-left: 400px;">
<div align="right" style="padding-bottom:5px; padding-right: 220px;"><a href="main.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Test</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit Test</td>
</tr>
<tr>
<td><label>Test</label></td>
<td><input type="hidden" style="color: black;" name="userId" class="txtField" value="<?php echo $row['userId']; ?>">
	<input type="text" style="color: black;" name="userName" class="txtField" value="<?php echo $row['test']; ?>"></td>
</tr>
<tr>
<td><label>Type of Test</label></td>
<td><input type="text" style="color: black;" name="firstName" class="txtField" value="<?php echo $row['type']; ?>"></td>
</tr>
<td><label>Amount</label></td>
<td><input type="text" style="color: black;" name="lastName" class="txtField" value="<?php echo $row['amount']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</section>
</form>
</body></html>