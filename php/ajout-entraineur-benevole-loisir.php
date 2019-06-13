<?php
    include('connexion.php');

    $prenom=$_POST['prenom'];
    $diplome=$_POST['diplome'];
    $groupe=$_POST['groupe'];

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO entraineur_benevole_loisir (`prenom`, `diplome`, `groupe`) VALUES ('$prenom', '$diplome', '$groupe')";
    $db->exec($sql);

    header('location: ../pages/entraineurs.php');