<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = trim($_POST['id']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['pwd']);

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

        if ($controller->is_empty_inputs($username, $email, $password)) {
            $errors[] = "please fill in all fields";
        }

        if ($controller->is_invalid_email($email)) {
            $errors[] = "email invalid format";
        }

        if ($controller->is_invalid_username($username)) {
            $errors[] = "Username only allowed letters numbers";
        }

        if ($controller->is_length_invalid_username($username)) {
            $errors[] = "username is too long; it can only be up to 13 characters.";
        }

        if ($controller->is_invalid_pwd($password)) {
            $errors[] = "Password only 16 characters";
        }

        if ($controller->is_taken_username($username)) {
            $errors[] = "username has exists";
        }

        if ($controller->is_taken_email($email)) {
            $errors[] = "email has exists";
        }

        if ($controller->is_taken_pwd($password)) {
            $errors[] = "password has exists";
        }

        if ($errors) {
            require_once 'config_session.inc.php';
            $_SESSION['errors'] = $errors;
            header('Location: ../editProfile.php?errors');
            exit;
        }

        $user = $controller->editprofile($id, $username, $email, $password);
        if ($user) {
            $user = $controller->Get_User_By_Id($id);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['username'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_pwd'] = $user['pwd'];
            header('Location: ../Profile.php');
            exit;
        }
    } catch (PDOException $e) {
        die('Query Failed : ' . $e->getMessage());
    }
} else {
    header('Location: ../editProfile.php');
    exit;
}
?>