<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">
  <!-- Sidebar -->
  <aside class="w-64 bg-white h-screen shadow-md p-4">
    <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
    <nav>
      <a href="index.php" class="block py-2 px-3 hover:bg-gray-200 rounded mb-2">Products</a>
      <a href="add.php" class="block py-2 px-3 hover:bg-gray-200 rounded">Add Product</a>
    </nav>
  </aside>

  <!-- Main -->
  <main class="flex-1 p-6">
    <h1 class="text-3xl font-bold mb-4">Edit Product</h1>
    <form class="bg-white shadow rounded-lg p-6 max-w-lg">
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Product Name</label>
        <input type="text" value="Sample Product" class="w-full border px-3 py-2 rounded">
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Price</label>
        <input type="number" value="50" class="w-full border px-3 py-2 rounded">
      </div>
      <div class="mb-4">
        <label class="block mb-1 font-semibold">Image</label>
        <input type="file" class="w-full border px-3 py-2 rounded">
      </div>
      <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update Product</button>
    </form>
  </main>
</body>
</html>
