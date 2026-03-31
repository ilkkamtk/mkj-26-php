</div>

<dialog
        id="notifications"
        <?php echo $_SESSION['notification'] ? 'open' : ''; ?>
>
    <form method="dialog" class="dialog-close-form">
        <button type="submit" class="dialog-close-btn" aria-label="Close notification">&times;</button>
    </form>
    <h3>Note!!</h3>
    <?php echo $_SESSION['notification']; ?>
</dialog>
<dialog id="errors" <?php echo $_SESSION['error'] ? 'open' : ''; ?>>
    <form method="dialog" class="dialog-close-form">
        <button type="submit" class="dialog-close-btn" aria-label="Close error">&times;</button>
    </form>
    <h3>Error!!</h3>
    <?php echo $_SESSION['error']; ?>
</dialog>
<?php

$_SESSION['notification'] = '';
$_SESSION['error'] = '';

?>
</body>
</html>