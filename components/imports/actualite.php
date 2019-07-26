<?php

class Actualite{
    public function fetch_all() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM actualites ORDER BY actualite_id DESC");
        $query->execute();

        return $query->fetchAll();
    }
}

?>