<?php 
  session_start();
    if (($_SESSION['role']!='Admin')) {
        session_destroy();
        header('Location: index.php');
    }
 ?>