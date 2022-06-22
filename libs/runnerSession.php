<?php
session_start();

// check if runner is login 
if (!isset($_SESSION['R_ID'])) {
    echo "<script>
    window.location = 'loginRunner.php';
    </script>";
    exit();
} 
// check runner registration status and redirect to runner profile if the status is not approved
else if (isset($_SESSION['R_ID'])) {
    require_once '../../../BusinessServiceLayer/controller/runnerProfileController.php';
    $runnerController = new runnerProfileController();
    $runnerController->userModel = $runnerController->model("runnerProfileModel");
    $runner = $runnerController->userModel->getUserById($_SESSION['R_ID']);
    $dataRunner = [
        'reg_status' => $runner->R_RegStatus,
    ];
    if ($dataRunner['reg_status'] != "APPROVED") {
        echo "<script>
    window.location = 'runnerProfile.php';
    </script>";
        exit();
    }
}

// check if runner is logout 
if (isset($_POST['logout'])) {
    session_destroy();
    $message = 'Success logout';
    echo "<script>
    alert('$message');
    </script>";
    header("Location: loginRunner.php");
    exit();
}
