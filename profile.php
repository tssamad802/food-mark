<?php
session_start();
if (
    !isset($_SESSION['user_id']) && 
    !isset($_SESSION['user_name']) && 
    !isset($_SESSION['user_email']) && 
    !isset($_SESSION['user_pwd'])
    ) {
    header('Location: ./login.php');
    exit;
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>User Profile - E-commerce</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100 min-h-screen p-6">
        <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">

            <!-- Header with Back Button -->
            <div class="bg-indigo-600 text-white p-6 flex items-center space-x-4">
                <a href="./index.php">
                    <button class="text-white text-xl hover:text-indigo-300 transition">
                        ← Back
                    </button>
                </a>
                <div>
                    <h1 class="text-3xl font-bold">
                        <?php
                        echo $_SESSION['user_name'];
                        ?>
                    </h1>
                    <p class="text-indigo-200">
                        <?php
                        echo $_SESSION['user_email'];
                        ?>
                    </p>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-3 gap-4 p-6 text-center">
                <div class="bg-gray-50 p-4 rounded-lg shadow">
                    <p class="text-2xl font-bold text-indigo-600">12</p>
                    <p class="text-gray-600 text-sm">Orders</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg shadow">
                    <p class="text-2xl font-bold text-indigo-600">5</p>
                    <p class="text-gray-600 text-sm">Wishlist</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg shadow">
                    <p class="text-2xl font-bold text-indigo-600">3</p>
                    <p class="text-gray-600 text-sm">Cart Items</p>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Orders</h2>
                <div class="space-y-4">
                    <div class="flex justify-between bg-gray-50 p-4 rounded-lg shadow">
                        <span>Order #1234</span>
                        <span class="text-green-600">Delivered</span>
                    </div>
                    <div class="flex justify-between bg-gray-50 p-4 rounded-lg shadow">
                        <span>Order #1235</span>
                        <span class="text-yellow-600">Processing</span>
                    </div>
                    <div class="flex justify-between bg-gray-50 p-4 rounded-lg shadow">
                        <span>Order #1236</span>
                        <span class="text-red-600">Cancelled</span>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-4 p-6 border-t">
                <a href="./editProfile.php">
                    <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded">Edit
                        Profile</button>
                </a>
                <a href="includes/logout.inc.php">
                    <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">Logout</button>
                </a>
            </div>

        </div>
    </body>

    </html>
    <?php
}
?>