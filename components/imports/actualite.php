<?php

class Actualite{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM actualites ORDER BY actualite_id DESC");
        $query->execute();

        return $query->fetchAll();
    }
}

?>