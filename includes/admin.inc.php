<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    include_once 'config_session.inc.php';
    require_once 'dbh.inc.php';
    require_once 'model.php';
    require_once 'control.php';

    $db = new database();
    $conn = $db->connection();
    $controller = new control($conn);
    $SecureSession = new SecureSession();

    try {
        $errors = [];

        if ($controller->is_empty_inputs_admin($username, $pwd)) {
            $errors[] = "please fill in alll fields";
        }

        if ($errors) {
            $_SESSION['errors'] = $errors;
            header("Location: ../admin/admin-login.php?error");
            exit;
        }

        $admin = $controller->admin($username, $pwd);
        if ($admin) {
            $_SESSION['admin'] = $admin['username'];
            header("Location: ../admin/index.php");
            exit;
        } else {
            $_SESSION['admin_error'] = "Something Went Wrong";
            header("Location: ../admin/admin-login.php");
            exit;
        }
    } catch (PDOException $e) {
        die('Query Failed : ' . $e->getMessage());
    }
} else {
    header("Location: ../admin/admin-login.php");
    exit;
}
?>