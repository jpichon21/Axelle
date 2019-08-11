<?php

class Biographie{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM biographie ");
        $query->execute();

        return $query->fetchAll();
    }
}

?>