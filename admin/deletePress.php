<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/article.php';
$article = new Article;

if (isset($_SESSION['logged_in'])) {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $pdo->query('SET NAMES utf8');
        $query = $pdo->prepare('DELETE from articles WHERE article_id = ?');
        $query->bindValue(1, $id);
        $query->execute();

        $success = "La date a été supprimée avec succès !";

    }
    //display delete page
    $articles = $article->fetch_all()

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
            <h2>Sélectionnez un extrait presse à supprimer :</h2>

            <?php if (isset($success)) { ?>
                <p style="color:green;"><?php echo $success; ?></p>
            <?php } ?>

                <div class="form-group column col-md-10 ">
                    <form action="deletePress.php" method="get" class="form-group">
                        <select  class="form-select" name="id">
                        <option value="">Sélectionnez un extrait presse pour le supprimer </option>
                            <?php foreach ($articles as $article) { ?>
                                <option value="<?php echo $article['article_id']; ?>">
                                    <?php echo $article['article_title'] ?>
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