<?php

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, "cagex");

$querry = " SELECT * FROM `formulaire_ipac` ORDER by id_ipac ";
$querry_run = mysqli_query($connect, $querry);

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

        <nav class="level " style="background-color:limegreen ;">
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

                <div class="column is-offset-0">
                    <div class="box">
                        <table class="table is-hoverable is-fullwidth">
                            <thead>
                                <tr>
                                    <th><abbr title="N°">N°</abbr></th>
                                    <th><abbr title="Formulaire">Formulaire</abbr></th>
                                    <th><abbr title="Date d'ajout">Date d'ajout</abbr></th>
                                    <th>
                                        <abbrd title="View">Voir le formulaire</abbrd>
                                    </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>N°</th>
                                    <th>Formulaire</th>
                                    <th>Date d'ajout</th>
                                    <th>
                                        <abbrd title="View">Voir le formulaire</abbrd>
                                    </th>

                            </tfoot>
                            <?php

                            while ($row = mysqli_fetch_array($querry_run)) {

                            ?>
                                <tbody>
                                    <tr>
                                        <th>
                                            <?php echo $row['id_ipac']; ?>
                                        </th>
                                        <th>
                                            <?php echo "DEMANDE D’INTERVENTION (MANDAT)"; ?>
                                        </th>
                                        <th>
                                            <?php echo $row['date_ajout']; ?>
                                        </th>
                                        <th><button class="button is-link" name="view">VIEW</button></th>
                                    </tr>


                                </tbody>

                            <?php
                            }
                            ?>

                        </table>
                    </div>

                </div>



            </div>
        </div>
    </div>

</body>

</html>