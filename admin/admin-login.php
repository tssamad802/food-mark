<?php
require_once '../includes/view.php';
$view = new view();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-sm">
    <h2 class="text-2xl font-bold mb-6 text-center">Admin Login</h2>
    <form action="../includes/admin.inc.php" method="POST">
      <!-- Username -->
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Username</label>
        <input type="text" placeholder="Enter username" class="w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-blue-300" name="username">
      </div>
      <!-- Password -->
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Password</label>
        <input type="text" placeholder="Enter password" class="w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-blue-300" name="pwd">
      </div>
      <!-- Button -->
      <button type="submit" class="bg-blue-500 text-white w-full py-2 rounded hover:bg-blue-600 transition">Login</button>
    </form>
    <?php
    $view->admin_errors();
    $view->admin_error();
    ?>
  </div>
</body>
</html>
