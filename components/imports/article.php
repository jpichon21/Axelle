<?php

class Article{
    public function fetch_all() {
        global $pdo;
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare("SELECT * FROM articles ORDER BY article_id DESC");
        $query->execute();

        return $query->fetchAll();
    }
}

?>