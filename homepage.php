<?php
session_start(); // Start the session

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Include database connection
include('db_connection.php');

// Retrieve user information from the database
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

// Retrieve posts from the database
$query_posts = "SELECT * FROM posts ORDER BY created_at DESC";
$result_posts = mysqli_query($conn, $query_posts);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h1>Welcome, <?php echo $user['name']; ?>!</h1>
    <p>Your email: <?php echo $user['email']; ?></p>

    <h2>Recent Posts</h2>
    <?php while ($post = mysqli_fetch_assoc($result_posts)) : ?>
        <div class="post">
            <p><?php echo $post['content']; ?></p>
            <span>Posted by: <?php echo $post['author']; ?></span>
        </div>
    <?php endwhile; ?>

    <a href="logout.php">Logout</a>

</body>
</html>

<?php
// Close database connection
mysqli_close($conn);
?>
