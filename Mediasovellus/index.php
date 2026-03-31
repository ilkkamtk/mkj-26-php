<?php
session_start();

require_once __DIR__ . '/config/config.php';

if (!isset($_SESSION['user'])) {
    header('Location: ' . SITE_URL . 'users.php');
    exit;
}

require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/inc/etusivu.php';
require_once __DIR__ . '/inc/footer.php';

