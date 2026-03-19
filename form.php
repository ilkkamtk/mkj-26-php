<?php
$name = $_POST['name'];
$age = $_POST['age'];
if (isset($name) && isset($age)) {
    echo "Name: " . $name . ", Age: " . $age;
}
?>