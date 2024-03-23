<?php

$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,'cagex');

mysqli_set_charset($connect, "utf8");

if(isset($_POST['submit'])){

    $nom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['mail']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $type = htmlspecialchars($_POST['type']);

    $query = "INSERT INTO user (NOM,PRENOM,EMAIL,MDP,TYPE) VALUES ('$nom','$prenom','$email','$mdp','$type') ";
    $query_run = mysqli_query($connect,$query);

    if ($query_run) {
        header('location: index_B.php');
    }

}

?>
