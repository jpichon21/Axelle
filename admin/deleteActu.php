<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/actualite.php';
$actualite = new Actualite;

if (isset($_SESSION['logged_in'])) {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare('DELETE from actualites WHERE actualite_id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        $success = "L'actualité a été supprimée avec succès !";

    }
    //display delete page
    $actualites = $actualite->fetch_all()

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
            <h2>Sélectionnez une Actualité à supprimer :</h2>

            <?php if (isset($success)) { ?>
                <p style="color:green;"><?php echo $success; ?></p>
            <?php } ?>

                <div class="form-group column col-md-10 ">
                    <form action="deleteActu.php" method="get" class="form-group">
                        <select  class="form-select" name="id">
                        <option value="">Sélectionnez une actualité pour la supprimer </option>
                            <?php foreach ($actualites as $actualite) { ?>
                                <option value="<?php echo $actualite['actualite_id']; ?>">
                                    <?php echo $actualite['actualite_tilte'] ?>
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