<?php
  include("connexion.php");

   $username = $_POST['usrnm'];
   $password = md5($_POST['pwd']);

    $req = $db->query('Select * FROM connexion');
    while ($resultat = $req->fetch())
    {
        if (($username == $resultat['username']) && ($password == $resultat['pwd']))
        {
            /*CODE quand connecter */
            session_start(); // ouverture session
            //création des variables session
            $_SESSION['usrnm'] = $_POST['usrnm'];
            $_SESSION['pwd'] = $_POST['pwd'];

            //redirection de l'utilisateur
            header("Location: ../index.php");

        }
        else {
            /*CODE quand erreur */
        echo("erreur");
        }
    }