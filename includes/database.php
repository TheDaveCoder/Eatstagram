<?php

  // Defining variables for SQLiteDatabase
  $dbHost = "localhost"; // database host name
  $dbUser = "root"; // databaes user name
  $dbPass = "";
  $dbName = "eatstagram";

  // Start connection to mysql database
  $connect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

  if (!$connect) {
    die("Failed to connect tp database");
  }
 ?>
