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
  <aside class="w-64 bg-white h-screen shadow-md p-4">
    <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
    <nav>
      <a href="index.php" class="block py-2 px-3 hover:bg-gray-200 rounded mb-2">Products</a>
      <a href="add.html" class="block py-2 px-3 bg-blue-500 text-white rounded">Add Product</a>
    </nav>
  </aside>

  <!-- Main -->
  <main class="flex-1 p-6">
    <h1 class="text-3xl font-bold mb-4">Add New Product</h1>
    <form class="bg-white shadow rounded-lg p-6 max-w-lg">
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Product Name</label>
        <input type="text" class="w-full border px-3 py-2 rounded" placeholder="Enter product name">
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Price</label>
        <input type="number" class="w-full border px-3 py-2 rounded" placeholder="Enter price">
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Image</label>
        <input type="file" class="w-full border px-3 py-2 rounded">
      </div>
      <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Product</button>
    </form>
  </main>
</body>
</html>
