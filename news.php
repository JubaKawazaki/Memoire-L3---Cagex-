<?php

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'cagex');

mysqli_set_charset($connect, "utf8");

$sql = "SELECT * FROM news";
$rslt = mysqli_query($connect, $sql);


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5eb8866ae7.js" crossorigin="anonymous"></script>
    <link href="css/bulma.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="javascript.js"></script>

</head>

<body class="has-background-grey-lighter">

    <!-- NAVBAR -->
    <nav class="navbar " style="background-color:darkgreen ;" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a href="index.php" class="#">
                <img src="img/globe_cagex.png" style="height:120px; padding-left:3rem; padding-right:3rem;">
            </a>

            <a role="button" class="navbar-burger is-active" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navMenu" class="navbar-menu is-active">
            <div class="navbar-start">
                <a class="navbar-item" href="index.php" style="background-color: darkgreen;">
                    <p style="color:azure;">ACCEUIL</p>
                </a>
                <a class="navbar-item" href="prod_serv.php" style="background-color: darkgreen;">
                    <p style="color:azure;">PRODUIT ET SERVICES</p>
                </a>

                <a class="navbar-item" href="formulaire.php" style="background-color: darkgreen;">
                    <p style="color:azure;">FORMULAIRE</p>
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" style="background-color: darkgreen;">
                        <p style="color:azure;">A PROPOS DE LA CAGEX</p>
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="n_connaitre.php">
                            NOUS CONNAITRE
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="msg_prsd.php">
                            MESSAGE DU PRESIDENT
                        </a>

                    </div>
                </div>
                <a class="navbar-item" href="news.php" style="background-color: darkgreen;">
                    <p style="color:azure;">NEWS</p>
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <a class="button is-small " href="#">
                        <span class="icon">
                            <i class="#"></i>
                        </span>
                    </a>

                    <a class="button is-small " href="#">
                        <span class="icon">
                            <i class="#"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end nav -->



    <!-- SECTION -->
    <section class="hero is-medium">
        <div class="hero-body">
            <div class="columns is-multiline is-narrow">
                <?php
                while ($row = mysqli_fetch_array($rslt)) {
                ?>

                    <div class="column is-one-third">

                        <div class="card">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-2" style="color:dodgerblue ;"><?php echo $row['titre']; ?></p>
                                    </div>
                                </div>

                                <div class="content">
                                    <p>
                                        " <?php echo $row['content']; ?> "
                                    </p>
                                    <br>
                                    <p class="subtitle">
                                        Ajouté le :<?php echo $row['date_ajout']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </section>


    <!-- end section -->


    <div class="content has-text-centered">
        <div class="columns">
            <div class="column is-full">
                <h2 class="subtitle">
                    <p>La CAGEX a Vos Cotés, Le Monde a Votre Portée</p>
                </h2>
                <img src="img/globe_cagex.png" style="height:200px;">
            </div>
        </div>
    </div>

    <!-- footer -->

    <footer class="footer has-background-grey-light">
        <div class="content has-text-centered">
            <div class="columns">

                <div class="column is-offset-5">
                    <p class="title">
                        <strong>Nous Contactez</strong>
                    </p>
                </div>

                <div class="column is-offset-3">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-small is-facebook is-link" href="#">
                                <span class="icon">
                                    <i class="fab fa-facebook fa-lg"></i>
                                </span>
                            </a>

                            <a class="button is-small is-youtube is-danger" href="#">
                                <span class="icon">
                                    <i class="fab fa-youtube fa-lg"></i>
                                </span>
                            </a>

                            <a class="button is-small  is-linkedin is-info" href="#">
                                <span class="icon">
                                    <i class="fab fa-linkedin fa-lg"></i>
                                </span>
                            </a>

                            <a class="button is-small  is-linkedin is-info" href="#">
                                <span class="icon">
                                    <i class="fab fa-linkedin fa-lg"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <br>
            <div class="columns">

                <div class="column">
                    <p class="subtitle"><strong>SIEGE SOCIAL</strong></p>
                    <div class="columns">
                        <div class="column">
                            <p>10, Route National N°36 <br> BP 116, 16320 Deley Ibrahim ALGER.</p>
                            <p>Tel: (213 23) 31 21 00/01</p>
                            <p>Fax: (213 23) 31 20 93/94</p>
                            <p>Email: pdg@cagex.dz</p>
                            <p>Email: dir_com@cagex.dz</p>
                            <p>Site: www.cagex.dz</p>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <p class="subtitle"><strong>DIRECTION REGIONAL CENTRE</strong></p>
                    <div class="columns">
                        <div class="column">
                            <p>10, Route National N°36 <br> 16320 Deley-Ibrahim, ALGER.</p>
                            <p>Tel/Fax: (213) 21 91 00 51</p>
                            <p>Mob: 06 61 68 85 22</p>
                            <p>Email: deleg_centre@cagex.dz</p>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <p class="subtitle"><strong>DELEGATION REGIONAL HAUTS PLATEUAX</strong></p>
                    <div class="columns">
                        <div class="column">
                            <p>Cité 238 logts belhaouki local N°250 setif</p>
                            <p>Tel/Fax: (213) 36 72 20 19 </p>
                            <p>Email: deleg_hp@cagex.dz</p>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <p class="subtitle"><strong>DELEGATION REGIONAL OUEST</strong></p>
                        <div class="columns">
                            <div class="column">
                                <p>Centre commercial "EL MOUNTAZAH" 31000 Oran</p>
                                <p>Tel/Fax: (213) 41 50 17 00</p>
                                <p>Mob: 06 61 68 04 42</p>
                                <p>Email: deleg_oran@cagex.dz</p>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <p class="subtitle"><strong>DELEGATION RAGIONAL EST</strong></p>
                        <div class="columns">
                            <div class="column">
                                <p>Tour Numidia, 23000 Annaba</p>
                                <p>Tel/Fax: (213) 38 84 85 74</p>
                                <p>Mob: 06 61 68 78 86</p>
                                <p>Email: deleg_annabaa@cagex.dz</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- end footer -->




</body>

</html>