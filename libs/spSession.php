<?php
session_start();


if (!isset($_SESSION['S_ID'])) {
    echo "<script>
    window.location.href = 'loginSP.php';
    </script>";
} 

if (isset($_POST['logout'])) {
    session_destroy();
    $message = 'Success logout';
    echo "<script>
    alert('$message');
    </script>";
    header('Location: loginSP.php');
}
