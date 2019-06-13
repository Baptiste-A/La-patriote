<?php
    include("connexion.php");

    $sql = $db->query("DELETE from entraineur_benevole_loisir WHERE id=".$_GET['id']);

    header('location: ../pages/entraineurs.php');