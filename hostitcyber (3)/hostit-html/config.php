<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
try {
    // Veritabanı bağlantısı
    $db = new PDO('mysql:host=localhost;dbname=id22382116_hostit', 'id22382116_admin', 'MElikekubr51?');

    // Hata modunu ayarla
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>