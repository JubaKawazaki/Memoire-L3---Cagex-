<?php

$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,"cagex");

if(isset($_POST['submit'])){

$creancier = htmlspecialchars($_POST['creancier']);
$siege = htmlspecialchars($_POST['siege_social']);
$represente = htmlspecialchars($_POST['representer']);
$fonction = htmlspecialchars($_POST['fonction']);
$debiteur = htmlspecialchars($_POST['debiteur']);
$adresse = htmlspecialchars($_POST['adresse']);
$montant = htmlspecialchars($_POST['montant']);
$currency = htmlspecialchars($_POST['montant_money']);
$fait = htmlspecialchars($_POST['fait_a']);
$date = htmlspecialchars($_POST['le']);
$dte_ajout = date("Y-m-d h:i:sa");

$querry = "INSERT INTO `formulaire_ipac`(`creancier`, `siege_social`, `representer`, `fonction`, `debiteur`, `adresse`, `montant`, `currency`, `endroit`, `date_form`, `date_ajout`) VALUES 
('$creancier','$siege','$represente','$fonction','$debiteur','$adresse','$montant','$currency','$fait','$date','$dte_ajout') ";

$querry_run = mysqli_query($connect,$querry);

if($querry_run){
    echo "<script type='text/javascript'>alert('formulaire envoyer'); </script>";
}


}



?>








<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/5eb8866ae7.js" crossorigin="anonymous"></script>
    <link href="css/bulma.css" rel="stylesheet">
    <script src="javascript.js"></script>

</head>

<body class="has-background-grey-lighter">

    <!-- NAVBAR -->
    <nav class="navbar" style="background-color:darkgreen ;" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a href="index.php" class="#">
                <img src="img/globe_cagex.png" style="height:120px; padding-left:3rem; padding-right:3rem;">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
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
    <div class="section">
        <div class="hero is-medium">
            <div class="hero-body">
                <div class="columns is-multiline is-centered">
                    <h1 class="title">DEMANDE D’INTERVENTION (MANDAT)</h1>
                    <div class="column is-full">

                        <form action="#" method="POST" class="box">

                            <div class="field">
                                <label for="" class="label">Le Créancier :</label>
                                <div class="control">
                                    <input class="input" type="text" name="creancier" value="" >
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Dont le siège social se trouve :</label>
                                <div class="control">
                                    <input class="input" type="text" name="siege_social" value="" >
                                </div>
                            </div>


                            <div class="field">
                                <label for="" class="label">Représenté par :</label>
                                <div class="control">
                                    <input class="input" type="text" name="representer" value="" >
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Fonction :</label>
                                <div class="control">
                                    <input class="input" type="text" name="fonction" value="" >
                                </div>
                            </div>
                            <br>
                            <p class="subtitle">
                                Donne mandat total et irrévocable à la C.A.G.E.X. Compagnie Algérienne d’Assurance
                                et de Garantie des Exportations SPA, 10 route Nationale Dely -Ibrahim, Alger, Algérie,
                                en vue de recouvrer, en son nom sa créance :
                            </p>
                            <div class="field">
                                <label for="" class="label">Auprès du débiteur:</label>
                                <div class="control">
                                    <input class="input" type="text" name="debiteur" value="" >
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Adresse:</label>
                                <div class="control">
                                    <input class="input" type="text" name="adresse" value="" >
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">Pour un montant de :</label>
                                        <div class="control">
                                            <input class="input" type="number" name="montant" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <br>
                                        <div class="select">
                                            <select name="montant_money">
                                                <option>choisir :</option>
                                                <option value="DA">DA</option>
                                                <option value="EUR">EUR</option>
                                                <option value="USD">USD</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <div class="field">
                                <label for="" class="label">Et :</label>
                                <div class="control">
                                    <p>• d’engager toute action en justice en recouvrement de cette créance ;</p>
                                    <p>• de consentir toutes compétences et juridictions, même en dernier ressort ;</p>
                                    <p>• de conclure, de plaider, de transiger, de concilier ;</p>
                                    <p>• demander et accorder tout délais ;</p>
                                    <p>• choisir, constituer, désigner, révoquer, tous experts, tous hommes de loi (Avocats,
                                        Avoués, Arbitres, Huissier) et des procédures ;</p>
                                    <p>• former toutes demandes en déclarations de redressement ou liquidation judiciaires,
                                        agir en conséquence ;</p>
                                    <p>• former toute opposition, faire toutes inscriptions ou saisies, faire toutes productions
                                        à ordre, formuler toutes constations, réquisition, en donner mainlevée ;</p>
                                    <p>• recevoir et signer toutes décharges ;</p>
                                    <p>• acquiescer, retirer et faire exécuter toutes décisions émanant des juridictions ;</p>
                                    <p>• recevoir et remettre toutes sommes d’argent ainsi que toutes pièces, à quelque titre
                                        que ce soit ;</p>
                                    <p>• agir en revendication de marchandises pouvant permettre le recouvrement de la
                                        créance ;</p>
                                    <p> • signer tous registres et mandats ;</p>
                                    <p>• généralement faire tout ce qui sera nécessaire à l’intérêt de cette action</p>
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Fait à :</label>
                                <div class="control">
                                    <input class="input" type="text" name="fait_a" value="" >
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">le :</label>
                                <div class="control">
                                    <input class="input" type="date" name="le" value="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class=" input button is-primary" type="submit" name="submit" value="Envoyer">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->


        <!-- footer -->

        <div class="content has-text-centered" style="background-color:darkgreen ;">
            <br>
            <div class="columns is-multiline">
                <div class="column is-full">
                    <p class="title is-3" style="color:azure;"><strong>CAGEX@2017</strong></p>
                </div>
                <div class="column is-full">
                    <p class="subtitle"><strong style="color:azure ;">Adresse: 10, Route national N°36 Dély-Ibrahim,ALGER </strong></p>
                </div>


            </div>
        </div>



        <!-- end footer -->




</body>

</html>