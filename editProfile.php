<?php
require_once 'includes/view.php';
$view = new view();
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
        <h2 class="text-2xl font-bold text-center text-indigo-600 mb-6">Edit Profile</h2>
        <form class="space-y-4" action="includes/editProfile.inc.php" method="post">
            <input type="hidden" value="<?php echo $_SESSION['user_id']?>" name="id">
            <div>
                <label class="block text-gray-700 mb-1">Name</label>
                <input type="text" placeholder="John Doe" autocomplete="off" value="<?php echo $_SESSION['user_name']?>" name="username"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="text" placeholder="johndoe@example.com" autocomplete="off" value="<?php echo $_SESSION['user_email']?>" name="email"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
            </div>
            <div>
                <label class="block text-gray-700 mb-1">Password</label>
                <input type="text" placeholder="Enter new password" autocomplete="off" value="<?php echo $_SESSION['user_pwd']?>" name="pwd"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500">
            </div>
            <div class="flex justify-between items-center mt-6">
                <a href="profile.php" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-6 rounded-lg">← Back</a>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded-lg">Save Changes</button>
            </div>
        </form>
        <?php
        $view->editProfile_errors();
        ?>
    </div>
</body>
</html>
<?php
}
?>