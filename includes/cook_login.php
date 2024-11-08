<?php

if (isset($_POST['submit'])) {
  require 'database.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    header("Location: ../Login/index.php?error=emptyFields");
    exit();
  } else {
    $sqlQuery = "SELECT * FROM userlist WHERE Username = ? && Customer_Type = 'cook' ";
    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt, $sqlQuery)) {
      header("Location: ../Login/index.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($result)) {
        $passCheck = password_verify($password, $row['Password']);
        if (!$passCheck) {
          header("Location: ../Login/index.php?error=passwordwrong");
          exit();
        } elseif ($passCheck) {
          session_start();
          $_SESSION['sessionId'] = $row['ID'];
          $_SESSION['sessionUser'] = $row['Username'];
          $_SESSION['sessionFName'] = $row['Full_Name'];
          $_SESSION['sessionEmail'] = $row['Email'];
          $_SESSION['sessionCType'] = $row['Customer_Type'];
          header("Location: ../homepage/home.php?loginsuccess");
          exit();
        } else {
          header("Location: ../Login/index.php?error=sqlerror");
          exit();
        }
      } else {
        header("Location: ../Login/index.php?error=usernotfound");
        exit();
      }
    }
  }

} else {
  header("Location: ../Login.php?error=accessforbidden");
  exit();
}

 ?>
