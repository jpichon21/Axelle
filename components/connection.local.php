<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=cms_axelle', 'root');
} catch (PDOException $e) {
        exit('DB error !');
}
?>