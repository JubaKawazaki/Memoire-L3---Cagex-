<?php

$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,"cagex");

if(isset($_POST['submit'])){

    $assureur = htmlspecialchars($_POST['assuer']);
    $raison_assureur = htmlspecialchars($_POST['raison_assurer']);
    $achteur = htmlspecialchars($_POST['type']);
    $raison_acheteur = htmlspecialchars($_POST['raison_acheteur']);
    $adr_cmplt = htmlspecialchars($_POST['addresse']);
    $code_vile = htmlspecialchars($_POST['code_vile']);
    $pays = htmlspecialchars($_POST['pays']);
    $num_reg_com = htmlspecialchars($_POST['num_registre_commerce']);
    $code_sirene = htmlspecialchars($_POST['code_sirene']);
    $tel = htmlspecialchars($_POST['tel']);
    $fax = htmlspecialchars($_POST['fax']);
    $email = htmlspecialchars($_POST['mail']);
    $ref_banc = htmlspecialchars($_POST['ref_banque']);
    $activite = htmlspecialchars($_POST['activite']);
    $traite_acheteur = htmlspecialchars($_POST['decision']);
    $date_traite = htmlspecialchars($_POST['date_activite']);
    $chiffre_affaire_dern_exrc = htmlspecialchars($_POST['chiffre_affaire']);
    $acheteur_affile = htmlspecialchars($_POST['affilier']);
    $incident_pay = htmlspecialchars($_POST['incident']);
    $date_incident = htmlspecialchars($_POST['date_incident']);
    $montant_pay = htmlspecialchars($_POST['montant']);
    $produit_export = htmlspecialchars($_POST['produit']);
    $produit_qnt = htmlspecialchars($_POST['quantiter']);
    $montant_glb_contrat = htmlspecialchars($_POST['montant_global']);
    $montant_exp = htmlspecialchars($_POST['montant_expedtion']);
    $rhytm_exp = htmlspecialchars($_POST['rythme_expedition']);
    $mode_pay = htmlspecialchars($_POST['mode_paiement']);
    $delai_pay = htmlspecialchars($_POST['delai_paiement']);
    $montant_decvrt = htmlspecialchars($_POST['montant_decouvert']);
    $risque_assure = htmlspecialchars($_POST['risque']);
    $montant_fact = htmlspecialchars($_POST['montant_facturation']);
    $LE = htmlspecialchars($_POST['date_depot']);
    $dte_ajout = date("D-m-y H:i:sa");




$sql = " INSERT INTO `fonctionement_pac`(`assurer`, `raison_assurer`, `acheteur`, `raison_acheteur`, `adr_cmplt`, `code_vile`, `pays`, `num_reg_com`, `code_sirene`, `tel`, `fax`, `email`,
 `ref_banc`, `activite`, `traite_acheteur`, `date_traite`, `chiffre_affaire_dern_exrc`, `acheteur_affile`, `incident_pay`, `date_incident`, `montant_pay`, `produit_export`, `produit_qnt`,
 `montant_glb_contrat`, `montant_exp`, `rhytm_exp`, `mode_pay`, `delai_pay`, `montant_decvrt`, `risque_assure`, `montant_fact`, `LE`, `date_ajout`) VALUES ( '$assureur', '$raison_assureur', '$achteur', '$raison_acheteur',
 '$adr_cmplt', '$code_vile', '$pays', '$num_reg_com', '$code_sirene', '$tel', '$fax', '$email', '$ref_banc', '$activite', '$traite_acheteur', '$date_traite', '$chiffre_affaire_dern_exrc', '$acheteur_affile', '$incident_pay',
 '$date_incident', '$mode_pay', '$produit_export', '$produit_qnt', '$montant_glb_contrat', '$montant_exp', '$rhytm_exp', '$mode_pay', '$delai_pay', '$montant_decvrt', '$risque_assure', '$montant_fact', '$LE','$dte_ajout')";

 $sql_run = mysqli_query($connect,$sql);

if($sql_run){
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
                    <h1 class="title">ASSURANCE CREDIT EXPORT DEMANDE D’AGREMENT SUR ACHETEUR POLICE GLOBALE</h1>
                    <div class="column is-ful">

                        <form action="#" method="POST" class="box">

                            <div class="field">
                                <label for="" class="title">L'assurer:</label>
                                <div class="control">
                                    <input class="input" type="text" name="assuer" value="" required>
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Nom/raison social:</label>
                                <div class="control">
                                    <input class="input" type="text" name="raison_assurer" value="" required>
                                </div>
                            </div>


                            <div class="field">
                                <label for="" class="title">L'acheteur</label>
                                <br>
                                <label class="radio">
                                    <input type="radio" name="type" value="Privé">
                                    Privé
                                </label>
                                <label class="radio">
                                    <input type="radio" name="type" value="Public">
                                    Public
                                </label>
                            </div>

                            <div class="field">
                                <label for="" class="label">Nom/raison social:</label>
                                <div class="control">
                                    <input class="input" type="text" name="raison_acheteur" value="" >
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Adresse compléte:</label>
                                <div class="control">
                                    <input class="input" type="text" name="addresse" value="" >
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Code ville:</label>
                                <div class="control">
                                    <input class="input" type="text" name="code_vile" value="" >
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Pays:</label>
                                <div class="control">
                                    <input class="input" type="text" name="pays" value="" required>
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">N° Registre de commerce:</label>
                                <div class="control">
                                    <input class="input" type="number" name="num_registre_commerce" value="" >
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Code siréne ou équivalent:</label>
                                <div class="control">
                                    <input class="input" type="text" name="code_sirene" value="" required>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">Tél:</label>
                                        <div class="control">
                                            <input class="input" type="number" name="tel" value="" required>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">Fax:</label>
                                        <div class="control">
                                            <input class="input" type="number" name="fax" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">Email:</label>
                                        <div class="control">
                                            <input class="input" type="mail" name="mail" value="">
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="field">
                                <label for="" class="label">Réference bancaire:</label>
                                <div class="control">
                                    <input class="input" type="text" name="ref_banque" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="title">L'Activité:</label>
                                <div class="control">
                                    <input class="input" type="text" name="activite" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Avez vous deja traité avec cette acheteur ?<br></label>
                                <label class="radio">
                                    <input type="radio" name="decision" value="Oui">
                                    Oui
                                </label>
                                <label class="radio">
                                    <input type="radio" name="decision" value="Non">
                                    Non
                                </label>
                            </div>

                            <div class="field">
                                <label for="" class="label">Si oui depuis quelle date ?</label>
                                <div class="control">
                                    <input class="input" type="date" name="date_activite" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Chiffre d'affaire du dernier exercice :</label>
                                <div class="control">
                                    <input class="input" type="number" name="chiffre_affaire" value="" >
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">S'agit-il d'un acheteur qui vous est affilié ? </label>
                                <label class="radio">
                                    <input type="radio" name="affilier" value="Oui">
                                    Oui
                                </label>
                                <label class="radio">
                                    <input type="radio" name="affilier" value="Non">
                                    Non
                                </label>
                            </div>

                            <div class="field">
                                <label for="" class="label">Avez-vous déja eu des incidents de paiement ? </label>
                                <label class="radio">
                                    <input type="radio" name="incident" value="Oui">
                                    Oui
                                </label>
                                <label class="radio">
                                    <input type="radio" name="incident" value="Non">
                                    Non
                                </label>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">Si oui, depuis quelle date ?</label>
                                        <div class="control">
                                            <input class="input" type="date" name="date_incident" value="" >
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">Montant :</label>
                                        <div class="control">
                                            <input class="input" type="number" name="montant" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">Les produits a exporter ;</label>
                                        <div class="control">
                                            <textarea class="textarea is-small" name="produit" placeholder="Produits a exporter">

                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">Quantité :</label>
                                        <div class="control">
                                            <input class="input" type="number" name="quantiter" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Montant global du contrat/marché :</label>
                                <div class="control">
                                    <input class="input" type="number" name="montant_global" value="">
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">Montant par éxpedition :</label>
                                        <div class="control">
                                            <input class="input" type="number" name="montant_expedtion" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">Rhythme des expadition :</label>
                                        <div class="control">
                                            <input class="input" type="text" name="rythme_expedition" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">Mode de paiement :</label>
                                        <div class="control">
                                            <input class="input" type="text" name="mode_paiement" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">Délai de paiement :</label>
                                        <div class="control">
                                            <input class="input" type="text" name="delai_paiement" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Montant de découvert demandé :</label>
                                <div class="control">
                                    <input class="input" type="number" name="montant_decouvert" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Risque a assurer: </label>
                                <label class="radio">
                                    <input type="radio" name="risque" value="RC">
                                    RC(Risque commercial)
                                </label>
                                <label class="radio">
                                    <input type="radio" name="risque" value="RP">
                                    RP(Risque Politic)
                                </label>
                                <label class="radio">
                                    <input type="radio" name="risque" value="RIM">
                                    RIM(Risque d'Interuption de Marché)
                                </label>
                            </div>

                            <div class="field">
                                <label for="" class="label">PS/ veuillez précisez le montant de la facturation a :</label>
                                <div class="control">
                                    <input class="input" type="number" name="montant_facturation" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">LE :</label>
                                <div class="control">
                                    <input class="input" type="date" name="date_depot" value="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input button is-primary" type="submit" name="submit" value="Envoyer Formulaire">
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