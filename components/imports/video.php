<?php

class Video{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM videos ORDER BY videos_id DESC");
        $query->execute();

        return $query->fetchAll();
    }
}

?>