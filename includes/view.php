<?php
session_start();
class view
{
    public function register_errors()
    {
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];

            echo "<br>";
            foreach ($errors as $error) {
                echo "<p class='bg-red-100 text-red-700 border border-red-400 rounded px-4 py-2 mb-2'>$error</p>";
            }

            unset($_SESSION['errors']);
        }
    }

    public function login_errors()
    {
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
            echo "<br>";
            foreach ($errors as $error) {
                echo "<p class='bg-red-100 text-red-700 border border-red-400 rounded px-4 py-2 mb-2'>$error</p>";
            }
            unset($_SESSION['errors']);
        }
    }

    public function login_error() {
        if (isset($_SESSION['login_error'])) {
            $error = $_SESSION['login_error'];
            echo "<br>";
            echo "<p class='bg-red-100 text-red-700 border border-red-400 rounded px-4 py-2 mb-2'>$error</p>";
            unset($_SESSION['login_error']);
        }
    }
}
?>