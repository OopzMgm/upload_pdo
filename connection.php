<?php
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "upload_pdo_db";

    try {
        $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_username, $db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOEXCEPTION $e) {
        $e->getMessage();
    }
?>