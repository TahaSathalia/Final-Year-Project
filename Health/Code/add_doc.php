<?php
include "auth.php";
if(count($_POST)>0) {
	require_once("db.php");
	$sql = "INSERT INTO doctor (dname, spec, fees) VALUES ('" . $_POST["userName"] . "','" . $_POST["firstName"] . "','" . $_POST["lastName"] . "')";
	mysqli_query($conn,$sql);
	$current_id = mysqli_insert_id($conn);
	if(!empty($current_id)) {
		$message = "New Doctor Added Successfully";
	}
}
?>
<html>
<head>
<title>Add New Doctor</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body> 
<form name="frmUser" method="post" action="">
<div style="width:80%;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<section style="padding-top: 100px; padding-left: 400px;">
<div align="right" style="padding-bottom:5px; padding-right: 220px;"><a href="doc.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List Doctors</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Add New Doctor</td>
</tr>
<tr>
<td><label>Doctor Name</label></td>
<td><select style="background: black;" name="userName">
    <option disabled selected>-- Select Doctor --</option>
    <?php
        include "db.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT Name From reg WHERE role='Doctor'");  // Use select query for getting doctors name from data.

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['Name'] ."'>Dr " .$data['Name'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select></td>
</tr>
<td><label>Specialization</label></td>
<td><input type="text" style="color: black;" name="firstName" class="txtField"></td>
</tr>
<td><label>Fees Of Doctor</label></td>
<td><input type="text" style="color: black;" name="lastName" class="txtField"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</section>
</form>
</body></html>