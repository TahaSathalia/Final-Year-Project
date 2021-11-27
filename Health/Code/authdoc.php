<?php 
  session_start();
    if (($_SESSION['role']!='Doctor')) {
        session_destroy();
        header('Location: index.php');
    }
 ?>