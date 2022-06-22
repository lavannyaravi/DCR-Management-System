<?php
session_start();
// check  runner login
if (!isset($_SESSION['R_ID'])) {
  echo "<script>
    window.location = 'loginRunner.php';
    </script>";
  exit();
}
// check runner  logout
if (isset($_POST['logout'])) {
  session_destroy();
  $message = 'Success logout';
  echo "<script>
    alert('$message');
    </script>";
  header("Location: loginRunner.php");
  exit();
}