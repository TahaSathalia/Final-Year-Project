<?php
require_once("db.php");
session_start();
//ssio;n is a way to store information (in variables) to be used across multiple pages.  
unset($_SESSION['auth']);
session_destroy();  
header("Location: index.php");//use for the redirection to some page  
?>  
  ?>