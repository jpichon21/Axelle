<?php 
session_start();
include_once '../components/connection.php';

if (isset($_SESSION['logged_in'])) {
    if (isset($_POST['title'], $_POST['content'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];

        if (empty($title) or empty($content)){
            $error = "Tous les champs sont requis !";
        } else {
            $pdo->query('SET NAMES utf8');
            $query = $pdo->prepare('INSERT INTO actualites (actualite_tilte, actualite_content) VALUES (?, ?)');
            $query->bindValue(1, $title);
            $query->bindValue(2, $content);

            $query->execute();

            header('Location: success.php');
        }
    }
?>
    <html>
        <head>
            <title>Axelle Fanyo | Admin</title>
            <link rel="stylesheet" href="../css/main.css"/>
            <link rel="stylesheet" href="../css/spectre/spectre.min.css"/>
            <link rel="stylesheet" href="../css/spectre/spectre-exp.min.css"/>
            <link rel="stylesheet" href="../css/spectre/spectre-icons.min.css"/>
        <body>

        <?php include 'header.php'; ?>

        <div id="loginPageContainer">

            <?php if (isset($error)) { ?>
                <p style="color:#aa0000;"><?php echo $error; ?></p>
            <?php } ?>
            
            <div class="container" id="contentContainer">
            <h2>Ajouter une Actualité</h2>
                <div class="form-group column col-md-10 ">
                    <form action="addActu.php" method="post"  autocomplete="off">
                        <input class="form-input" type="text" name="title" placeholder="Titre"/>
                        <textarea rows="3" class="form-input" name="content" placeholder="Description de l'actualité"></textarea>
                        <input class="btn btn-primary input-group-btn" type="submit" value="Ajouter"/>
                        <a href="index.php" class="return">🡐 Retour</a>
                    </form>
                </div>
            </div>



        </div>
    <body>


<?php

} else {
    header('Location : index.php');
}



?>