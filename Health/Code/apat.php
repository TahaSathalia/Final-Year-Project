
<?php 
  session_start();
    if (($_SESSION['role']!='Patient')) {
        session_destroy();
        header('Location: index.php');
    }
 ?>
  