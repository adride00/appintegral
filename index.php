<?php
  ob_start();

  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('vista/dashboard.php', false);}

  require_once 'vista/login.php';  
?>

