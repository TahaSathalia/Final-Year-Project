<?php
include "apat.php";
  ?>
<html>
<head>
<title>Book Test</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
    <ul>
        <li>
            <a href="patienthome.php" class="active">Home</a>
        </li>
        <li>
            <a href="booktest.php">Back</a>
        </li>
        <!-- <li>
            <a href="viewbill.jsp">View Bill</a>
        </li> -->
        <li>
            <a href="lout.php">Logout</a>
        </li>
    </ul>
</nav>

<form name="frmUser" method="post" action="testing.php">
<div style="width:80%;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<section style="padding-top: 100px; padding-left: 400px;">
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Book New Test</td>
</tr>
<tr>
<td><label>Test Name</label></td>
<td><select style="background: black;" name="test">
    <option disabled selected>-- Select Test --</option>
    <?php
        include "db.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT test From users");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['test'] ."'>" .$data['test'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select></td>
</tr>
<tr>
<td><label>Doctor Name</label></td>
<td><select style="background: black;" name="doc">
    <option disabled selected>-- Select Doctor --</option>
    <?php
        include "db.php";  // Using database connection file here
        $records = mysqli_query($conn, "SELECT dname From doctor");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['dname'] ."'>Dr " .$data['dname'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select></td>
</tr>
<td><label>Appoinment Date</label></td>
<td><input type="date" style="color: black;" name="date" class="txtField"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</section>
</form>
</body></html>