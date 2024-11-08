<?php
  session_start();
  unset($_SESSION["sessionId"]);
  unset($_SESSION["sessionUser"]);
  session_destroy();
  header("Location:../Login/index.php");
  exit();
 ?>
