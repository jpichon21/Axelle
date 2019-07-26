<?php
session_start();
include_once '../components/connection.php';

if (isset($_SESSION['logged_in'])){
// display index
?>
    <html>
    <head>
        <title>Axelle Fanyo | Admin</title>
        <link rel="stylesheet" href="../css/main.css"/>
        <link rel="stylesheet" href="../css/spectre/spectre.min.css"/>
        <link rel="stylesheet" href="../css/spectre/spectre-exp.min.css"/>
        <link rel="stylesheet" href="../css/spectre/spectre-icons.min.css"/>
    <head>
    <body>

    <?php include 'header.php'; ?>

    <div id="adminPageContainer">
    <h1>Bienvenue sur l'Interface Administrateur </h1>

    <div class="accordion">
    <input type="checkbox" id="accordion-1" name="accordion-checkbox" hidden>
        <label class="accordion-header" for="accordion-1">
            <i class="icon icon-arrow-right mr-1"></i>
            Gérer mes Dates
        </label>
        <div class="accordion-body">
            <a href="addDate.php"><i class="icon icon-plus"></i>Ajouter une date</a>
        </div>
        <div class="accordion-body">
            <a href="deleteDate.php"><i class="icon icon-delete"></i>Supprimer une date</a>
        </div>
    </div>

    <div class="accordion">
    <input type="checkbox" id="accordion-2" name="accordion-checkbox" hidden>
        <label class="accordion-header" for="accordion-2">
            <i class="icon icon-arrow-right mr-1"></i>
            Gérer mes Actualités
        </label>
        <div class="accordion-body">
            <a href="addDate.php"><i class="icon icon-plus"></i>Ajouter une Actualité</a>
        </div>
        <div class="accordion-body">
            <a href="deleteDate.php"><i class="icon icon-delete"></i>Supprimer une Actualité</a>
        </div>
    </div>

    <div class="accordion">
    <input type="checkbox" id="accordion-3" name="accordion-checkbox" hidden>
        <label class="accordion-header" for="accordion-3">
            <i class="icon icon-arrow-right mr-1"></i>
            Gérer mes Extraits Presse
        </label>
        <div class="accordion-body">
            <a href="addDate.php"><i class="icon icon-plus"></i>Ajouter un Extrait Presse</a>
        </div>
        <div class="accordion-body">
            <a href="deleteDate.php"><i class="icon icon-delete"></i>Supprimer un Extrait Presse</a>
        </div>
    </div>



  
       
    </div>
    <body>
<?php
} else {
    if (isset($_POST['username'], $_POST['password'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        if (empty($username) or empty($password)) {
            $error = "Tous les champs sont requis !";
        } else {
            $query = $pdo->prepare('SELECT * FROM users WHERE user_name = ? AND user_password = ?');
            $query->bindValue(1, $username);
            $query->bindValue(2, $password);

            $query->execute();
            
            $num = $query->rowCount();

            if($num == 1){
                //user details correct
                $_SESSION['logged_in'] = true;

                header('Location: index.php');
                exit();
            } else {
                $error = "Identifiants non reconnus";
            }
        }
    }
//display login
?>

    <html>
    <head>
        <title>Axelle Fanyo | Admin</title>
        <link rel="stylesheet" href="../css/main.css"/>
        <link rel="stylesheet" href="../css/spectre/spectre.min.css"/>
        <link rel="stylesheet" href="../css/spectre/spectre-exp.min.css"/>
        <link rel="stylesheet" href="../css/spectre/spectre-icons.min.css"/>
    <body>
    <div id="loginPageContainer">

  
        <div class="container" id="loginContainer">
        <h2>Se connecter</h2>
        <?php if (isset($error)) { ?>
            <p style="color:#aa0000;" class="error-msg"><?php echo $error; ?></p>
        <?php } ?>
            <div class="form-group column col-md-10 ">
                <form action="index.php" method="post">
                    <input class="form-input" type="text" name="username" placeholder="Identifiant"/>
                    <input class="form-input" type="password" name="password" placeholder="Mot de passe"/>
                    <input class="btn btn-primary input-group-btn" type="submit" value="Connexion"/>
                    <a href="../index.php" class="return">🡐 Retour</a>
                </form>
            </div>
        </div>

    </div>
    <body>

<?php
    
}

?>