<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES['product_img'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_category = $_POST['product_category'];
    $product_img = $_FILES['product_img'];

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

        if ($controller->is_empty_inputs_add_products($product_name, $product_price, $product_desc, $product_category, $product_img)) {
            $errors[] = "please fill in all fields";
        }

        if ($controller->is_invalid_product_name($product_name)) {
            $errors[] = "product name is invalid";
        }

        if ($controller->is_invalid_product_price($product_price)) {
            $errors[] = "product price is invalid";
        }

        if ($controller->is_invalid_product_desc($product_desc)) {
            $errors[] ='product description is invalid';
        }
    } catch (PDOException $e) {
        die('Query Failed : ' . $e->getMessage());
    }
} else {
    header('Location: ../admin/add.php');
    exit;
}
?>