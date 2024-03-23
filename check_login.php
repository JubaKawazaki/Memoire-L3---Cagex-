<?php

session_start();

$connect = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connect, 'cagex');

mysqli_set_charset($connect, "utf8");

if (isset($_POST['submit'])) {

    $email = htmlspecialchars($_POST['mail']);
    $mdp = htmlspecialchars($_POST['mdp']);

    $selct = "SELECT * FROM user";
    $rslt = mysqli_query($connect, $selct);

    while ($row = mysqli_fetch_array($rslt)) {
        if ($row["email"] == $email && $row["mdp"] == $mdp) {
           header("location: index_deco.php");
        }
    }
}

?>