<?php

$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,"cagex");

if(isset($_POST['submit'])){

    $adm_user = $_POST['user_adm'];
    $adm_name = $_POST['nom_adm'];
    $adm_prenom = $_POST['prenom_adm'];
    $adm_mail = $_POST['mail_adm'];


$query = " INSERT INTO `log_admin`(`username`, `nom`, `prenom`, `mail`) VALUES ('$adm_user','$adm_name','$adm_prenom','$adm_mail') ";
$query_run = mysqli_query($connect,$query);

if($query_run){
    echo "<script type='text/javascript'>alert('admin ajouter !'); </script>";
}

}


?>




<!DOCTYPE html>
<html lang="en" style="background-color:lightsteelblue ;">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5eb8866ae7.js" crossorigin="anonymous"></script>
    <link href="css/bulma.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="javascript.js"></script>

</head>

<body>

    <br>

    <div>

        <nav class="level" style="background-color:limegreen ;">
            <p class="level-item has-text-centered">
                <a class="link is-info" style="color:black;" href="admin.php"><strong>ACCEUIL</strong></a>
            </p>
            <p class="level-item has-text-centered">
                <a href="add_news.php" class="link is-info" style="color:black;"><strong>Ajouter NEWS</strong></a>
            </p>
            <p class="level-item has-text-centered">
                <img src="img/globe_cagex.png" alt="" width="120px">
            </p>

            <p class="level-item has-text-centered"></a>

            <div class="dropdown is-hoverable">
                <div class="dropdown-trigger">
                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
                        <span><strong>Liste Formulaire</strong></span>
                        <span class="has-icon is-small">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                    <div class="dropdown-content">
                        <a href="form1.php" class="dropdown-item">
                            Souscription d’une nouvelle police d’assurance
                        </a>
                        <a href="form2.php" class="dropdown-item">
                            Fonctionnement de la police d’Assurance Crédit
                        </a>
                        <a href="form3.php" class="dropdown-item">
                            Indemnisation de la police d’Assurance Crédit
                        </a>
                    </div>
                </div>
            </div>
            </p>

            <p class="level-item has-text-centered">
                <a href="add_admin.php" class="link is-info" style="color:black;"><strong>Ajouter ADMIN</strong></a>
            </p>

        </nav>

        <p class="level-item has-text-centered">
            <a class="button is-danger" href="log_admin.php" name="logout"><strong>Se Déconnecter</strong></a>
        </p>
    </div>



    <div class="section">
        <div class="hero is-medium">
            <div class="hero-body">
                <div class=" columns">
                    <div class="column">
                        <form action="#" method="POST" class="box">
                        <div class="field">
                                <label for="" class="label">Nom d'utilisateur</label>
                                <div class="control has-icons-left">
                                    <input class="input is-focused" type="text" name="user_adm" placeholder="User Name" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Nom</label>
                                <div class="control has-icons-left">
                                    <input class="input is-focused" type="text" name="nom_adm" placeholder="Nom" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Prenom</label>
                                <div class="control has-icons-left">
                                    <input class="input is-focused" type="text" name="prenom_adm" placeholder="Prenom" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">E-mail</label>
                                <div class="control has-icons-left">
                                    <input class="input is-focused" type="mail" name="mail_adm" placeholder="example@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                <input class="button is-success" type="submit" name="submit" value="Ajouter">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>