<?php 
  include "auth.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DBZ Health Care</title>
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
            
    </style>
</head> 
<body>
<!-- Main Header -->
<header class="main-header">
    <img src="img/logo.png" alt="">
    <h1>WELCOME <?php echo $_SESSION['ADM'];?></h1>
</header>
<!-- Navbar -->
<nav>
    <ul>
        <li>
            <a href="customerhome.jsp" class="active">Home</a>
        </li>

      <!--   <li>
            <a href="booktechnicians.jsp">Book Technician</a>
        </li> -->
        <li>
            <a href="viewbill.jsp">View Test</a>
        </li>
        <li>
            <a href="lout.php">Logout</a>
        </li>
    </ul>
</nav>
<div class="form-div animated bounceInDown" style="width: 300px;
height: 300px;
text-align: center;
margin: 90px auto;
background-color: rgba(0,0,0,0.5);
border-radius: 1px 20px;
box-shadow: 0 0 15px #00aeef;
float: left;
margin-left: 200px;">
    <div style="width: 250px; height: 200px; vertical-align: middle;text-align: center; display: table-cell;">
        <a href="main.php"> UPDATE TEST
        <img style= "height: 200px; width: 200px; padding: 50px; padding-top: 100px; "src="img/tube.PNG">
        </a>
    </div>
    
</div>

<div class="form-div animated bounceInDown" style="width: 300px;
height: 300px;
text-align: center;
margin: 90px auto;
background-color: rgba(0,0,0,0.5);
border-radius: 1px 20px;
box-shadow: 0 0 15px #00aeef;
float: right;
margin-right: 200px;">
     <div style="width: 250px; height: 200px; vertical-align: middle;text-align: center; display: table-cell;">
        <a href="doc.php"> UPDATE DOCTOR
        <img style= "height: 200px; width: 200px; padding: 50px; padding-top: 100px; "src="img/technician.PNG">
        </a>
    </div>
    
</div>
</body>
</html>