<?php

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, "cagex");

mysqli_set_charset($connect,"utf8");

if (isset($_POST['submit'])) {


    $assure = htmlspecialchars($_POST['assuer']);
    $achteur = htmlspecialchars($_POST['achteur']);
    $raison_soc_achteur = htmlspecialchars($_POST['raison_acheteur']);
    $adres_achteur = htmlspecialchars($_POST['addresse']);
    $wilaya = htmlspecialchars($_POST['wilaya']);
    $code_postal  = htmlspecialchars($_POST['code_postal']);
    $tel = htmlspecialchars($_POST['tel']);
    $fax = htmlspecialchars($_POST['fax']);
    $email = htmlspecialchars($_POST['mail']);
    $n_reg_comrc = htmlspecialchars($_POST['num_rc']);
    $mandataire_leg = htmlspecialchars($_POST['manda_leg']);
    $n_identif_fisc = htmlspecialchars($_POST['num_id_fis']);
    $banque_1 = htmlspecialchars($_POST['1_banq']);
    $agence_1 = htmlspecialchars($_POST['agnc1']);
    $cpte_1 = htmlspecialchars($_POST['num_cpt1']);
    $banque_2 = htmlspecialchars($_POST['2_banq']);
    $agence_2 = htmlspecialchars($_POST['agnc2']);
    $cpte_2 = htmlspecialchars($_POST['num_cpt2']);
    $code_achteur = htmlspecialchars($_POST['code_acht']);
    $soc_liee = htmlspecialchars($_POST['soc_liee']);
    $precise_lien = htmlspecialchars($_POST['soc_lie_oui']);
    $nat_prodt_servc = htmlspecialchars($_POST['nature_prod_serv']);
    $montant_glob_contra = htmlspecialchars($_POST['mant_glb_contrat']);
    $montant_livr = htmlspecialchars($_POST['mant_par_livraison']);
    $rythm_livr = htmlspecialchars($_POST['rythm_livr']);
    $delai_paim = htmlspecialchars($_POST['delai_pay']);
    $cmpt_de = htmlspecialchars($_POST['compt_de']);
    $mod_pay_livr = htmlspecialchars($_POST['mod_pay_livr']);
    $trai_avc_acht = htmlspecialchars($_POST['traite_avc_acht']);
    $trail_date = htmlspecialchars($_POST['date_traite']);
    $chiff_aff_drn_exer = htmlspecialchars($_POST['chiffre_aff_dern_exr']);
    $montant_decvrt = htmlspecialchars($_POST['montant_decouvert']);
    $duree_crdt = htmlspecialchars($_POST['durée_credit']);
    $mod_paim = htmlspecialchars($_POST['mode_paiment']);
    $incid_paim = htmlspecialchars($_POST['incident']);
    $date_1_incid = htmlspecialchars($_POST['date_1_incident']);
    $montant_1_incid = htmlspecialchars($_POST['montant_1']);
    $reglement = htmlspecialchars($_POST['ete_regle']);
    $date_2_incid = htmlspecialchars($_POST['date_2_incident']);
    $montant_2_incid = htmlspecialchars($_POST['montant_2']);
    $conve_achteur = htmlspecialchars($_POST['conv_achteur']);
    $garenti_achteur = htmlspecialchars($_POST['garnt_acheteur']);
    $si_oui_leqel = htmlspecialchars($_POST['si_oui_lequel']);
    $montant_decvrt_dmnd = htmlspecialchars($_POST['mnt_decvrt_demnd']);
    $durée_crdt = htmlspecialchars($_POST['dure_crdt']);
    $mode_paiment_2 = htmlspecialchars($_POST['mode_pay2']);








    $sql = " INSERT INTO `formulaire_snpa`(`assure`, `achteur`, `raison_soc_achteur`, `adres_achteur`, `wilaya`, `code_postal`, `tel`,
     `fax`, `email`, `n_reg_comrc`, `mandataire_leg`, `n_identif_fisc`, `banque_1`, `agence_1`, `cpte_1`, `banque_2`, `agence_2`,
      `cpte_2`, `code_achteur`, `soc_liee`, `precise_lien`, `nat_prodt_servc`, `montant_glob_contra`, `montant_livr`, `rythm_livr`,
       `delai_paim`, `cmpt_de`, `mod_paim_livr`, `trai_avc_acht`, `trail_date`, `chiff_aff_drn_exer`, `montant_decvrt`, `duree_crdt`,
        `mod_paim`, `incid_paim`, `date_1_incid`, `montant_1_incid`, `reglement`, `date_2_incid`, `montant_2_incid`, `conve_achteur`,
          `garenti_achteur`, `si_oui_leqel`, `montant_decvrt_dmnd`, `dure_crdt`, `mode_paiment_2`) 
    VALUES ( '$assure', '$achteur', '$raison_soc_achteur',
 '$adres_achteur', '$wilaya', '$code_postal', '$tel', '$fax', '$email', '$n_reg_comrc', '$mandataire_leg', '$n_identif_fisc', '$banque_1', '$agence_1', '$cpte_1',
 '$banque_2', '$agence_2', '$cpte_2', '$code_achteur', '$soc_liee', '$precise_lien', '$nat_prodt_servc', '$montant_glob_contra', '$montant_livr', '$rythm_livr',
 '$delai_paim', '$cmpt_de', '$mod_pay_livr', '$trai_avc_acht', '$trail_date', '$chiff_aff_drn_exer', '$montant_decvrt', '$duree_crdt', 
 '$mod_paim', '$incid_paim', '$date_1_incid', '$montant_1_incid', '$reglement', '$date_2_incid','$montant_2_incid','$conve_achteur',
  '$garenti_achteur', '$si_oui_leqel', '$montant_decvrt_dmnd', '$durée_crdt', '$mode_paiment_2')";

    $sql_run = mysqli_query($connect, $sql);

    if ($sql_run) {
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
                    <h1 class="title">ASSURANCE CREDIT DOMESTIQUE DEMANDE DE LIMITE DE CREDIT SUR ACHETEUR POLICES LOCALES</h1>
                    <div class="column is-ful">

                        <form action="#" method="POST" class="box">

                            <div class="field">
                                <label for="" class="title">L'Assure:</label>
                                <div class="control">
                                    <input class="input" type="text" name="assuer" value="">
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="title">Achteur:</label>
                                <div class="control">
                                    <input class="input" type="text" name="achteur" value="">
                                </div>
                            </div><br>

                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">POLICCE</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col">CB</th>
                                        <th><input class="input" type="text" name="cb" value=""></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CP</th>
                                        <td colspan="2"><input class="input" type="text" name="cp" value=""></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">NP</th>
                                        <td colspan="2"><input class="input" type="text" name="np" value=""></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">AN</th>
                                        <td colspan="2"><input class="input" type="text" name="an" value=""></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Effet : </th>
                                        <td colspan="2">DU <input class="input" type="date" name="eff_du" value=""></td>
                                        <td>AU <input class="input" type="date" name="eff_au" value=""></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">AVENANT DE RECONDUCTION</th>
                                        <th scope="col">N° 100</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col">Effet :</th>
                                        <th><input class="input" type="date" name="efft" value=""></th>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>





                            <div class="field">
                                <label for="" class="title">L'Acheteur</label>
                                <div class="control">
                                    <input class="input" type="text" name="achteur" value="">
                                </div>
                                <br>
                            </div>

                            <div class="field">
                                <label for="" class="label">Nom/raison social:</label>
                                <div class="control">
                                    <input class="input" type="text" name="raison_acheteur" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Adresse:</label>
                                <div class="control">
                                    <input class="input" type="text" name="addresse" value="">
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">Wilaya:</label>
                                        <div class="control has-icons-left">
                                            <div class="select">
                                                <select name="wilaya">
                                                    <option selected> --Choisir Wilaya--</option>
                                                    <option value="Alger">Alger</option>
                                                    <option value="Annaba">Annaba</option>
                                                    <option value="Oran">Oran</option>
                                                    <option value="Setif">Setif</option>
                                                </select>
                                            </div>
                                            <span class="icon is-left">
                                                <i class="fas fa-globe"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">code postal:</label>
                                        <div class="control">
                                            <input class="input" type="number" name="code_postal" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">Tél:</label>
                                        <div class="control">
                                            <input class="input" type="number" name="tel" value="">
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
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">N° Registre Commerce :</label>
                                        <div class="control">
                                            <input class="input" type="number" name="num_rc" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">Nom du Mandataire Légal :</label>
                                        <div class="control">
                                            <input class="input" type="text" name="manda_leg" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">N° Identification fiscale :</label>
                                <div class="control">
                                    <input class="input" type="number" name="num_id_fis" value="">
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="title">2. REFERENCES BANCAIRES :</label>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">- 1ère Banque :</label>
                                        <div class="control">
                                            <input class="input" type="text" name="1_banq" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label"> Agence :</label>
                                        <div class="control">
                                            <input class="input" type="text" name="agnc1" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">N°/Cpte :</label>
                                        <div class="control">
                                            <input class="input" type="number" name="num_cpt1" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">- 2ème Banque :</label>
                                        <div class="control">
                                            <input class="input" type="text" name="2_banq" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label"> Agence :</label>
                                        <div class="control">
                                            <input class="input" type="text" name="agnc2" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">N°/Cpte :</label>
                                        <div class="control">
                                            <input class="input" type="number" name="num_cpt2" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">Code acheteur (si déjà agréé) :</label>
                                <div class="control">
                                    <input class="input" type="number" name="code_acht" value="">
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">S’agit-il d’une société liée ?</label>
                                <label class="radio">
                                    <input type="radio" name="soc_liee" value="Oui">
                                    Oui
                                </label>
                                <label class="radio">
                                    <input type="radio" name="soc_liee" value="Non">
                                    Non
                                </label>
                            </div>
                            <div class="field">
                                <label for="" class="label">Si oui : préciser le lien :</label>
                                <label class="radio">
                                    <input type="radio" name="soc_lie_oui" value="société mère">
                                    société mère
                                </label>
                                <label class="radio">
                                    <input type="radio" name="soc_lie_oui" value="société filiale">
                                    société filiale
                                </label>
                                <label class="radio">
                                    <input type="radio" name="soc_lie_oui" value="autre (préciser)">
                                    autre
                                </label>
                                <label>
                                    Preciser : <input type="text" name="precision">
                                </label>
                            </div>
                            <div class="field">
                                <label for="" class="title">3. OPERATIONS ENVISAGEES :</label>
                            </div>
                            <div class="field">
                                <label for="" class="label">Nature des Produits / services :</label>
                                <div class="control">
                                    <input class="input" type="text" name="nature_prod_serv" value="">
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">Montant global du contrat :</label>
                                <div class="control">
                                    <input class="input" type="number" name="mant_glb_contrat" value="">
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">Montant par livraison :</label>
                                        <div class="control">
                                            <input class="input" type="number" name="mant_par_livraison" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">Rythme des livraisons :</label>
                                        <div class="control">
                                            <input class="input" type="text" name="rythm_livr" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">Délai de paiement :</label>
                                        <div class="control">
                                            <input class="input" type="number" name="delai_pay" value="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="label">à compter de :</label>
                                        <div class="control">
                                            <input class="input" type="date" name="compt_de" value="">
                                        </div>
                                        <label for="" class="label">Date de facturation</label>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">Mode de paiement :</label>
                                <label class="radio">
                                    <input type="radio" name="mod_pay_livr" value="traite_simple">
                                    Traites Simples
                                </label>
                                <label class="radio">
                                    <input type="radio" name="mod_pay_livr" value="traite_accepte">
                                    Traites Acceptés
                                </label>
                                <label class="radio">
                                    <input type="radio" name="mod_pay_livr" value="traite_avalise">
                                    Traites Avalisées
                                </label>
                                <label class="radio">
                                    <input type="radio" name="mod_pay_livr" value="cheque">
                                    Chèque
                                </label>
                                <label class="radio">
                                    <input type="radio" name="mod_pay_livr" value="virement">
                                    Virement
                                </label>
                                <label class="radio">
                                    <input type="radio" name="mod_pay_livr" value="autre">
                                    Autres
                                </label>
                                <label>
                                    Preciser : <input type="text" name="precision">
                                </label>
                            </div>
                            <div class="field">
                                <label for="" class="title">4. AVEZ-VOUS DEJA TRAITE AVEC CET ACHETEUR ?</label>
                                <label class="radio">
                                    <input type="radio" name="traite_avc_acht" value="Oui">
                                    Oui
                                </label>
                                <label class="radio">
                                    <input type="radio" name="traite_avc_acht" value="Non">
                                    Non
                                </label>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label for="" class="label">Si oui, depuis quelle date : </label>
                                        <div class="control">
                                            <input class="input" type="date" name="date_traite" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <label for="" class="label">Chiffres d’affaires réalisés durant les trois derniers exercices :</label>
                            <div class="field">
                                <label for="" class="label">200n-3 :</label>
                                <div class="control">
                                    <input class="input" type="number" name="chiffre_aff_dern_exr" placeholder="Produits a exporter">
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">200n-2 :</label>
                                <div class="control">
                                    <input class="input" type="number" name="chiffre_aff_dern_exr" placeholder="Produits a exporter">
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">200n-1 :</label>
                                <div class="control">
                                    <input class="input" type="number" name="chiffre_aff_dern_exr" placeholder="Produits a exporter">
                                </div>
                            </div>

                            <div class="field">
                                <label for="" class="label">Si vous accordez actuellement un découvert (crédit) à votre acheteur, précisez le détail de ce découvert :</label>
                                <div class="field is-horizontal">
                                    <div class="field-body">
                                        <div class="field">
                                            <label for="" class="label">Montant découvert :</label>
                                            <div class="control">
                                                <input class="input" type="number" name="montant_decouvert" value="">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label for="" class="label">Durée du crédit :</label>
                                            <div class="control">
                                                <input class="input" type="number" name="durée_credit" value="">
                                            </div>Jours
                                        </div>
                                        <div class="field">
                                            <label for="" class="label">Mode de paiement :</label>
                                            <div class="control">
                                                <input class="input" type="text" name="mode_paiment" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Avez-vous déjà eu des incidents de paiement ? </label>
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
                                            <label for="" class="label">Si oui, depuis quelle date : </label>
                                            <div class="control">
                                                <input class="input" type="date" name="date_1_incident" value="">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label for="" class="label">Montant :</label>
                                            <div class="control">
                                                <input class="input" type="number" name="montant_1" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="" class="label">Ont-ils été réglés ? </label>
                                    <label class="radio">
                                        <input type="radio" name="ete_regle" value="Oui">
                                        Oui
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="ete_regle" value="Non">
                                        Non
                                    </label>
                                </div>
                                <div class="field is-horizontal">
                                    <div class="field-body">
                                        <div class="field">
                                            <label for="" class="label">Si oui, depuis quelle date : </label>
                                            <div class="control">
                                                <input class="input" type="date" name="date_2_incident" value="">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label for="" class="label">Montant :</label>
                                            <div class="control">
                                                <input class="input" type="number" name="montant_2" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="" class="title">5. VOTRE ACHETEUR EST IL CONVENTIONNE ? </label>
                                    <label class="radio">
                                        <input type="radio" name="conv_achteur" value="Oui">
                                        Oui
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="conv_achteur" value="Non">
                                        Non
                                    </label>
                                    <p>Si oui, joindre une copie de la convention.</p>
                                    <div class="control">
                                        <input class="input" type="file" name="copie">
                                    </div>

                                </div>
                                <div class="field">
                                    <label for="" class="title">6. AVEZ-VOUS DES SURETES OU AUTRES GARANTIES SUR VOTRE ACHETEUR :</label>
                                    <label class="radio">
                                        <input type="radio" name="garnt_acheteur" value="Oui">
                                        Oui
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="garnt_acheteur" value="Non">
                                        Non
                                    </label>
                                    <div class="field">
                                        <label for="" class="label">Si oui, lesquelles (préciser) :</label>
                                        <div class="control">
                                            <input class="input" type="text" name="si_oui_lequel" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="" class="title">7. MONTANT DU DECOUVERT DEMANDE :</label>
                                    <label>
                                        <input type="text" name="mnt_decvrt_demnd">
                                    </label>
                                </div>
                                <div class="field is-horizontal">
                                    <div class="field-body">
                                        <div class="field">
                                            <label for="" class="label">- Durée du crédit : </label>
                                            <div class="control">
                                                <input class="input" type="date" name="dure_crdt" value="">
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label for="" class="label">- Mode de paiement :</label>
                                            <div class="select is-primary">
                                                <select name="mode_pay2">
                                                    <option>CHOISIR</option>
                                                    <option value="Espèce">Espèce</option>
                                                    <option value="Carte bancaire">Carte bancaire</option>
                                                    <option value="chèque">chèque</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="" class="title">8. DOCUMENTS A JOINDRE :</label><br><br>
                                    <strong>
                                        <p>La demande de limite de crédit sur acheteur doit être accompagnée des documents suivants :</p>
                                    </strong><br>
                                    <p>-- Copie du R.C de l’acheteur.</p><br>
                                    <p>-- Copie de la carte fiscale.</p><br>
                                    <p>-- Extrait de naissance N° 12 du gérant.</p><br>
                                    <p>-- Les trois (3) derniers bilans et comptes de résultats.</p><br>
                                </div>
                                <div class="field">



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