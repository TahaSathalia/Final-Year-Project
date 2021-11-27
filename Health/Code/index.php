
<!DOCTYPE html>
<html lang="en">
<head>
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
        width: 100%;
        padding-right: 30px;
    }
    p{

        color: white;
    }
    ::placeholder {
        color: black;
    }

    .work-around{
        width: calc(100% - 10px);
        overflow: hidden;
        padding: 30px
    }

    .inline-divs{
        display:inline-block;
        width: calc(50% - 20px);

    }

</style>
</head>
<body background="img/home.PNG">
<!-- Main Header -->
<header class="main-header">
<img src="img/logo.png" alt="">
    <h1>DBZ HealthCare</h1>
</header>

<div class="form-div animated fadeInUpBig work-around">
    <div class="intro inline-divs">
                    <h1 align="center" style="padding-right: 80px;"><u>ABOUT DBZ HEALTHCARE </u></h1>
                    <center><h4><p name="About">DBZ Healthcare portal has been set up by the ministry of health and welfare. To provide a portal for doctors and patients to maintain record and hastle free access to book medical test appoinments. A systematic approach towards building an ergonomic and easy portal to book your appoinments and to maintain records of patients. DBZ healthcare system were introduced in 2019, and since then its has evolved the healthcare system culture across the whole nation. </p></h4></center>
                </div>      
    <div class="inline-divs">
        <img src="img/user.png" style="padding-top: 25px;">
        <h2>Login</h2>
        <form action="log.php" method="post">
            <input type="text" placeholder="Username" name="uname" id="uname" required="" autocomplete="off">
            <br>
            <input type="password" placeholder="Password" name="pass" id="pass" required="">
            <br>
            <br>
            <input type="submit" value="Login" id="submit">
            <p><a href="signup.php" class="reg">New User SignUp Here...</a></p>
            <br>
        </form>

    </div>
</div>
</body>
</html>