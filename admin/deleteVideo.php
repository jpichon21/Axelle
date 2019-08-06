<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/video.php';
$video = new Video;

if (isset($_SESSION['logged_in'])) {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare('DELETE from videos WHERE videos_id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        $success = "La vidéo a été supprimée avec succès !";

    }
    //display delete page
    $videos = $video->fetch_all()

    ?>
        <html>
        <head>
            <title>Axelle Fanyo | Admin</title>
            <link rel="stylesheet" href="../css/main.css"/>
            <link rel="stylesheet" href="../css/spectre/spectre.min.css"/>
            <link rel="stylesheet" href="../css/spectre/spectre-exp.min.css"/>
            <link rel="stylesheet" href="../css/spectre/spectre-icons.min.css"/>
        </head>
        <body>

        <?php include 'header.php'; ?>

        <div id="loginPageContainer">
            
            <div class="container" id="contentContainer">
            <h2>Sélectionnez une vidéo à supprimer :</h2>

            <?php if (isset($success)) { ?>
                <p style="color:green;"><?php echo $success; ?></p>
            <?php } ?>

                <div class="form-group column col-md-10 ">
                    <form action="deleteVideo.php" method="get" class="form-group">
                        <select  class="form-select" name="id">
                        <option value="">Sélectionnez une vidéo pour la supprimer </option>
                            <?php foreach ($videos as $video) { ?>
                                <option value="<?php echo $video['videos_id']; ?>">
                                    <?php echo $video['videos_title'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    <input class="btn btn-primary input-group-btn" type="submit" value="Supprimer"/>
                    </form>
                </div>
            </div>



        </div>
    <body>

    <?php

} else {
    header('Location: index.php');
}

?>