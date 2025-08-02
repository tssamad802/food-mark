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
  <title>Admin Panel - Products</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <!-- Sidebar -->
  <div class="flex">
    <aside class="w-64 bg-white h-screen shadow-md p-4">
      <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
      <nav>
        <a href="index.php" class="block py-2 px-3 bg-blue-500 text-white rounded mb-2">Products</a>
        <a href="add.php" class="block py-2 px-3 hover:bg-gray-200 rounded">Add Product</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <h1 class="text-3xl font-bold mb-4">Products List</h1>
      <table class="w-full bg-white shadow rounded-lg overflow-hidden">
        <thead class="bg-gray-200">
          <tr>
            <th class="py-3 px-4 text-left">ID</th>
            <th class="py-3 px-4 text-left">Image</th> <!-- ✅ Added -->
            <th class="py-3 px-4 text-left">Name</th>
            <th class="py-3 px-4 text-left">Price</th>
            <th class="py-3 px-4 text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="py-2 px-4">1</td>
            <td class="py-2 px-4">
              <img src="https://images.pexels.com/photos/90946/pexels-photo-90946.jpeg" alt="Product" class="w-12 h-12 rounded object-cover">
            </td>
            <td class="py-2 px-4">Sample Product</td>
            <td class="py-2 px-4">$50</td>
            <td class="py-2 px-4">
              <a href="edit.php" class="text-blue-500 mr-3">Edit</a>
              <button class="text-red-500">Delete</button>
            </td>
          </tr>
          <!-- Repeat rows dynamically -->
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>

<?php
}
?>