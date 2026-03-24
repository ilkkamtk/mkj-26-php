<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['remember'])) {
        $_SESSION['username'] = $_POST['username'];
    } else {
        unset($_SESSION['username']);
    }
}
?>

<?php
include('./inc/header.php');
?>



<div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username</label>
        <input name="username" id="username" value="<?php echo $_SESSION['username'] ?? ''; ?>">

        <label>
            Remember me
            <input type="checkbox" name="remember" <?php echo isset($_SESSION['username']) ? 'checked' : ''; ?>>
        </label>

        <button type="submit">Send</button>
    </form>
</div>

<?php
include('./inc/footer.php');
?>

