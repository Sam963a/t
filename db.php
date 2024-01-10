<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=schoenenvoorraad', 'root', '');
} catch (PDOException $e) {
    die('Error: ' . $e->getMessage());
}
