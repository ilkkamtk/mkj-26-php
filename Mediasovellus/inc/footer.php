</div>

<dialog id="notifications" <?php echo $_SESSION['notification'] ? 'open' : ''; ?>>
    <h3>Note!!</h3>
    <?php echo $_SESSION['notification']; ?>
</dialog>
<dialog id="errors" <?php echo $_SESSION['error'] ? 'open' : ''; ?>>
    <h3>Error!!</h3>
    <?php echo $_SESSION['error']; ?>
</dialog>
<?php

$_SESSION['notification'] = '';
$_SESSION['error'] = '';

?>
</body>
</html>