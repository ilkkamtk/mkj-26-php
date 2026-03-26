<?php
require_once __DIR__ . '/../db/dbConnect.php';
require_once __DIR__ . '/../config/config.php';
global $DBH;
?>

<section id="media-items">
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Created</th>
            <th>Owner</th>
            <th>Thumbnail</th>
            <th>Operations</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql = 'SELECT MediaItems.*, Users.username FROM MediaItems JOIN Users On Users.user_id = MediaItems.user_id;';
        try {
            $STH = $DBH->prepare($sql);
            $STH->execute();
            $STH->setFetchMode(PDO::FETCH_ASSOC);
            while ($row = $STH->fetch()) {
                echo '<tr>';
                echo '<td>' . $row['title'] . '</td>';
                echo '<td>' . $row['description'] . '</td>';
                echo '<td>' . $row['created_at'] . '</td>';
                echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['filename'] . '</td>';
                echo '<td><a href="' . SITE_URL . '?operation=modify">Modify</a> / Delete</td>';
                echo '</tr>';
            }
        } catch (PDOException $error) {
        }
        ?>
        </tbody>
    </table>
</section>