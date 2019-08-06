<?php

try{
    $pdo = new PDO('mysql:host=axellefaazcg6547.mysql.db;dbname=axellefaazcg6547', 'axellefaazcg6547', 'Gutenberg21y');
} catch (PDOException $e) {
        exit('DB error !');
}

?>