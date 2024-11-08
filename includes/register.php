<?php
  // Checks if the submit button has been pressed
  if(isset($_POST['submit'])) {
    require 'database.php';

    $fullname = $_POST['fullname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $customerType = $_POST['ct'];

    if (empty($fullname) || empty($username) || empty($email) || empty($password) || empty($customerType)) {
      header("Location: ../Register/registration.php?error=emptyfields");
      exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
      header("Location: ../Register/registration.php?error=invalidusername");
      exit();
    } else {
      $checkQuery = "SELECT Username FROM userlist WHERE Username = ?";
      $stmt = mysqli_stmt_init($connect);
      if (!mysqli_stmt_prepare($stmt, $checkQuery)) {
        header("Location: ../Register/registration.php?error=sqlerror");
        exit();
      } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $rowCount = mysqli_stmt_num_rows($stmt);

        if ($rowCount > 0) {
          header("Location: ../Register/registration.php?error=usernametaken");
          exit();
        } else {
          $checkQuery = "INSERT INTO userlist (Full_Name, Username, Email, Password, Customer_Type) VALUES (?, ?, ?, ?, ?);";
          $stmt = mysqli_stmt_init($connect);
          if (!mysqli_stmt_prepare($stmt, $checkQuery)) {
            header("Location: ../Register/registration.php?error=sqlerror");
            exit();
          } else {
              $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt, "sssss", $fullname, $username, $email, $hashedPassword, $customerType);
              mysqli_stmt_execute($stmt);
              header("Location: ../Login/index.php?registration=successful");
              exit();
          }
        }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
  }
 ?>
