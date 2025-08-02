<?php
class control extends model
{
    public function is_empty_inputs($username, $email, $password)
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

    public function is_empty_inputs_admin($username, $pwd)
    {
        return empty($username) || empty($pwd);
    }

    public function is_empty_inputs_add_products($product_name, $product_price, $product_desc, $product_category, $product_img)
    {
        return empty($product_name) || empty($product_price) || empty($product_desc) || empty($product_category) || empty($product_img);
    }

    public function is_invalid_product_name(string $product_name)
    {
        return !preg_match("/^[a-zA-Z]+$/", $product_name);
    }

    public function is_invalid_product_price($product_price)
    {
        return !is_numeric($product_price);
    }

    public function is_invalid_product_desc(string $product_desc)
    {
        return strlen($product_desc) >= 100;
        
    }
}
?>