<?php

class Scene{
    public function fetch_all() {
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM images_scene ORDER BY image_id DESC");
        $query->execute();

        return $query->fetchAll();
    }
}

?>