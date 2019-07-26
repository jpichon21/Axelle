<?php

class Date{
    public function fetch_all() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM dates ORDER BY date_id DESC");
        $query->execute();

        return $query->fetchAll();
    }
}

?>