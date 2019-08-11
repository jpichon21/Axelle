<?php

class Date{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM dates ORDER BY date_id ASC");
        $query->execute();

        return $query->fetchAll();
    }
}

?>