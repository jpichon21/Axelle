<?php

class Biography{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM biography ");
        $query->execute();

        return $query->fetchAll();
    }
}

?>