<?php 
session_start();
include_once '../components/connection.php';
include_once '../components/imports/biographieFR.php';

$biographie = new Biographie;
$biographies = $biographie->fetch_all();

if (isset($_SESSION['logged_in'])) {
    if (isset($_POST['content'])) {
        $content = $_POST['content'];

        if (empty($content)){
            $error = "Tous les champs sont requis !";
        } else {
            $pdo->query('SET NAMES utf8');
            $query = $pdo->prepare("UPDATE biographie SET biographie_content = '$content' ");
            $query->bindValue(1, $content);

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
            <h2>Modifier la biographie FR</h2>
                <div class="form-group column col-md-10 ">
                    <form action="editBioFR.php" method="post"  autocomplete="off">
                    <?php foreach ($biographies as $biographie) { ?>
                        <textarea rows="12" class="form-input" name="content" ><?php echo $biographie['biographie_content']; ?></textarea>
                    <?php } ?>
                        <input class="btn btn-primary input-group-btn" type="submit" value="Modifier"/>
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