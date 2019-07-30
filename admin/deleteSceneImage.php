<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/scene.php';
$scene = new Scene;

if (isset($_SESSION['logged_in'])) {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = $pdo->prepare('DELETE from images_scene WHERE image_id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        $success = "La photo a été supprimée avec succès !";

    }
    //display delete page
    $scenes = $scene->fetch_all()

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
            <h2>Sélectionnez une photo scène à supprimer :</h2>

            <?php if (isset($success)) { ?>
                <p style="color:green;"><?php echo $success; ?></p>
            <?php } ?>

                <div class="form-group column col-md-10 ">
                    <form action="deleteSceneImage.php" method="get" class="form-group">
                        <select  class="form-select" name="id">
                        <option value="">Sélectionnez une photo scène pour la supprimer </option>
                            <?php foreach ($scenes as $scene) { ?>
                                <option value="<?php echo $scene['image_id']; ?>">
                                    <?php echo $scene['image_content'] ?> | <?php echo $scene['image_alt'] ?>
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