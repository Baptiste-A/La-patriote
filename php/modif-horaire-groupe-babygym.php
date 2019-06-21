<?php
    include('connexion.php');

    $groupe=$_POST['group'];
    $horaire=$_POST['horaire'];

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($groupe != ''){
        $sql = "UPDATE horaire_groupe_babygym SET `groupe` = '$groupe' WHERE id = ".$_GET['id'];
        $db->exec($sql);
    }

    if($horaire != ''){
        $sql = "UPDATE horaire_groupe_babygym SET `horaire` = '$horaire' WHERE id = ".$_GET['id'];
        $db->exec($sql);
    }

    header('location: ../pages/horaires.php');