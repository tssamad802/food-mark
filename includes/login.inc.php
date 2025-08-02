<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $pwd = trim($_POST['pwd']);

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

        if ($controller->is_empty_inputs_login($email, $pwd)) {
            $errors[] = 'please fill in all fields';
        }

        if ($errors) {
            include_once 'config_session.inc.php';
            $_SESSION['errors'] = $errors;
            header("Location: ../login.php");
            exit;
        }

        $user = $controller->login($email, $pwd);
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['username'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_pwd'] = $user['pwd'];
            header('Location: ../index.php?login');
            exit;
        } else {
            $_SESSION['login_error'] = "Something Went Wrong";
            header("Location: ../login.php");
            exit;
        }
    } catch (PDOException $e) {
        die('Query Failed : ' . $e->getMessage());
    }
} else {
    header("Location: ../login.php");
    exit;
}
?>