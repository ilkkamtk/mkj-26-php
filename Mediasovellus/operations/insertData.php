<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../db/dbConnect.php';
global $DBH;

if(!empty($_POST['title']) || !empty($_POST['description'])) {

    $sql = "INSERT INTO MediaItems (title, description, user_id, filename, filesize, media_type) VALUES (:title, :description, :user_id, :filename, :filesize, :media_type)";

    $data = [
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'user_id' => 1,
        'filename' => 'tiedosto',
        'filesize' => 1234,
        'media_type' => 'image/jpeg',
    ];

    try {
        $STH = $DBH->prepare($sql);
        $STH->execute($data);
        header('Location: ' . SITE_URL);
    } catch (PDOException $e) {
        echo "Could not insert data into the database.";
        file_put_contents(__DIR__ . '/../logs/PDOErrors.log', 'insertData.php - ' . $e->getMessage() . "\n", FILE_APPEND);
    }

} else {
    exit('No data or file');
}