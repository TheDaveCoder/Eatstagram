<?php
  session_start();
 if (!isset($_SESSION["sessionId"])) {
   header("Location: ../Login/index.php?not_logged_in");
   exit();
 }
?>
<?php
  require_once '../header/header.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Shared/root-colors.css">
    <link rel="stylesheet" href="../header/homepage.css">
    <link rel="stylesheet" href="home.css">
    <title>Home - <?php echo $_SESSION["sessionFName"]; ?></title>
  </head>
  <body>
    <section class="content-type">
      <section class="content-item">
        <p>Page Under Construction 🏗️</p>
      </section>
    </section>
  </body>
</html>
