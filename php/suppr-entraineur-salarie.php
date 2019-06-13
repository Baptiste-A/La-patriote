<?php
    include("connexion.php");

    $sql = $db->query("DELETE from entraineur WHERE id=".$_GET['id']);

    header('location: ../pages/entraineurs.php');