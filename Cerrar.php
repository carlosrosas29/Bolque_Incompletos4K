<?php
  session_start();
  unset($_SESSION['correo']); 
  unset($_SESSION["password"]);
  session_destroy();
  header("Location: Login.html");
  exit;
?>