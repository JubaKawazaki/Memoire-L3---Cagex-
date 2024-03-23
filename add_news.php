<?php

$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,"cagex");

if(isset($_POST['add'])){

    $titre = $_POST['titre'];
    $contents = $_POST['desc'];
    $date = date('Y-m-d');


$query = " INSERT INTO `news`(`titre`, `content`, `date_ajout`) VALUES ('$titre','$contents','$date') ";
$query_run = mysqli_query($connect,$query);

if($query_run){
    echo "<script type='text/javascript'>alert('news ajouter !'); </script>";
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

            <div class="column">

<article class="media box">

    <figure class="media-left">
        <p class="image is-128x128">
            <img src="img/docs.jpg">
        </p>
    </figure>

    <div class="media-content">
        <div class="content">
            <p class="subtitle">
                <strong>Contenue des News</strong>
            </p>
        </div>
        <br>
        <div class="">
            <form method="POST" action="#" class="box">
                <form method="POST" action="#" class="box">

                    <div class="field is-horizontal">

                        <div class="field-label is-normal">
                            <label class="label">Titre</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control">
                                    <input class="input" type="test" name="titre">
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label">Contenue du news</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <p class="control has-icons-left">
                                    <textarea class="textarea" placeholder="Tapez les details" name="desc"> </textarea>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <input class="button is-success" type="submit" value="Ajouter" name="add">
                    </div>

                </form>
            </form>

        </div>
    </div>

</article>
</div>


            </div>
        </div>
    </div>

</body>

</html>