<?php
class control extends model
{
    public function is_empty_inputs_register($username, $email, $password)
    {
        return empty($username) || empty($email) || empty($password);
    }

    public function is_invalid_email($email)
    {
        return !filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function is_invalid_username($username)
    {
        return !preg_match("/^[a-zA-Z0-9]+$/", $username);
    }

    public function is_length_invalid_username($username)
    {
        return strlen($username) >= 13;
    }

    public function is_invalid_pwd($password)
    {
        return strlen($password) >= 16;
    }

    public function is_empty_inputs_login($email, $pwd)
    {
        return empty($email) || empty($pwd);
    }
}
?>