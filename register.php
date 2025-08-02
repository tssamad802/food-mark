<?php
require_once 'includes/view.php';
$errors = new view();
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
  header('Location: ./index.php');
  exit;
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <form class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm" action="includes/signup.inc.php" method="post">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Sign up</h2>

    <label for="username" class="block text-gray-700 mb-1 font-medium">Username</label>
    <input
      type="text"
      id="username"
      name="username"
      placeholder="Your username"
      class="w-full mb-4 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
    />

    <label for="email" class="block text-gray-700 mb-1 font-medium">Email</label>
    <input
      type="text"
      id="email"
      name="email"
      placeholder="you@example.com"
      class="w-full mb-4 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
    />

    <label for="password" class="block text-gray-700 mb-1 font-medium">Password</label>
    <input
      type="text"
      id="password"
      name="pwd"
      placeholder="********"
      class="w-full mb-6 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
    />

    <button
      type="submit"
      class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition"
    >
      Sign Up
    </button>

    <p class="mt-4 text-center text-gray-600 text-sm">
      Already registered?
      <a href="login.php" class="text-indigo-600 hover:underline font-medium">Log in</a>
    </p>

    <?php
    $errors->register_errors();
    ?>
  </form>

</body>
</html>

<?php
}
?>
