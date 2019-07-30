<?php 
session_start();
include_once '../components/connection.php';

if (isset($_SESSION['logged_in'])) {
    if (isset($_POST['upload'])) {
        //chemin de sauvegarde
        $target = "../img/contents/sliders/".basename($_FILES['image']['name']);

        $image= $_FILES['image']['name'];
        $thumbnail= $_FILES['thumbnail']['name'];
        $title = $_POST['title'];

        if (empty($title) /*or empty($image)*/){
            $error = "Tous les champs sont requis !";
        } else {
            $query = $pdo->prepare('INSERT INTO images (image_alt, image_content, image_thumbnail) VALUES (?, ?, ?)');
            $query->bindValue(1, $title);
            $query->bindValue(2, $image);
            $query->bindValue(3, $thumbnail);

            $query->execute();

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                header('Location: success.php');
            }
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
            <h2>Ajouter une Image</h2>
                <div class="form-group column col-md-10 ">
                    <form action="addImage.php" method="post"  enctype="multipart/form-data">
                        <input type="hidden" name="size" value="1000000">

                        <label for="image">Importer une image</label>
                        <input class="form-input" type="file" name="image"/>

                        <label for="thumbnail">Importer une miniature</label>
                        <input class="form-input" type="file" name="thumbnail"/>

                        <textarea rows="3" class="form-input" name="title" placeholder="Titre de l'image"></textarea>

                        <input class="btn btn-primary input-group-btn" type="submit" name="upload" value="Ajouter"/>
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