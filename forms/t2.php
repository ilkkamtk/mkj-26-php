<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_POST['username']) && isset($_POST['remember'])) {
    setcookie('username', $_POST['username'], 0, '', '', true, true);
} else {
    setcookie('username', '', time() - 3600);
}
?>

<div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username</label>
        <input name="username" id="username" value="<?php if(isset( $_COOKIE['username'])) echo $_COOKIE['username']; ?>">

        <label>
            Remember me
            <input type="checkbox" name="remember">
        </label>

        <button type="submit">Send</button>
    </form>
</div>

</body>
</html>
