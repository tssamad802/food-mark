<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header('Location: ./admin-login.php');
  exit;
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">
  <!-- Sidebar -->
  <aside class="w-55 bg-white h-screen shadow-md p-4">
    <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
    <nav>
      <a href="index.php" class="block py-2 px-3 hover:bg-gray-200 rounded mb-2">Products</a>
      <a href="add.php" class="block py-2 px-3 bg-blue-500 text-white rounded">Add Product</a>
    </nav>
  </aside>

  <!-- Main -->
  <main class="flex-1 p-6">
    <h1 class="text-3xl font-bold mb-4">Add New Product</h1>
    <form class="bg-white shadow rounded-lg p-6 max-w-lg" action="../includes/add_Product.inc.php" method="post" enctype="multipart/form-data">
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Product Name</label>
        <input type="text" class="w-full border px-3 py-2 rounded" placeholder="Enter product name" name="product_name">
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Price</label>
        <input type="text" class="w-full border px-3 py-2 rounded" placeholder="Enter price" name="product_price">
      </div>
      <!-- ✅ Product Description -->
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Description</label>
        <textarea class="w-full border px-3 py-2 rounded" placeholder="Enter product description" name="product_desc" rows="4"></textarea>
      </div>
      <!-- ✅ Category Select -->
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Category</label>
        <select class="w-full border px-3 py-2 rounded" name="product_category">
          <option value="">Select Category</option>
          <option value="1">Electronics</option>
          <option value="2">Clothing</option>
          <option value="3">Home & Kitchen</option>
          <option value="4">Sports</option>
          <option value="5">Beauty & Health</option>
        </select>
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Image</label>
        <input type="file" class="w-full border px-3 py-2 rounded" name="product_img">
      </div>
      <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Product</button>
    </form>
  </main>
</body>
</html>

<?php
}
?>
