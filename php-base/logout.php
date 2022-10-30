<?php 
  session_start();
  session_destroy();
  header('Location: /Php-training/php-base/sessions.php');
?>