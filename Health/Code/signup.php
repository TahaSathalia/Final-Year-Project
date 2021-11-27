<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
        function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

    </script>
    <meta charset="UTF-8">
    <title>DBZ HealthCare</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<style type="text/css">
    .container{

        margin: auto;
        width: auto;
        
        padding-bottom: 100px;
    }
    .intro{

        text-align: left;
        opacity: 10;
        margin: 3px solid;
        width: 65%;
        padding-left: 20px;
    }
    p{

        color: white;
    }
    ::placeholder {
        color: black;
    }
</style>
</head>
<body background="img/home.PNG">
<!-- Main Header -->
<header class="main-header">
<img src="img/logo.png" alt="">
    <h1>DBZ HealthCare</h1>
</header>
<div class="form-div animated bounceInDown">
    <img src="img/user.png">
    <h2>Signup Here</h2>
    <form action="reg.php" method="post">
        <input type="text" placeholder="Write Your First Name" name="name" id="name" required="" autocomplete="off">
        <br>
        
        <input type="text" placeholder="User Name" name="uname" id="uname" required="" autocomplete="off">
        <br>
        <input type="password" id="pass" placeholder="Password" name="pass" id="pass" required="" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
        <br>
        <!-- An element to toggle between password visibility -->
        <input type="checkbox" onclick="myFunction()">Show Password
        <br>
        <input type="tel" placeholder="Contact No" name="mob" id="mob" maxlength="10" minlength="10" required="" pattern="[789][0-9]{9}" title="Must start with 7,8,9">
        <br>
        <select name="role" style="color: black;" required>
            <option value="">Select Role:</option>
            <option id="1" value="Patient">Patient</option>
            <option id="2" value="Doctor">Doctor</option>
            <option id="3" value="Admin">Admin</option>
        </select>
        <br>
        <input type="submit" value="Submit">
        <br>
        <br>
    </form>
    </div>