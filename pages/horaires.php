<?php session_start(); ?>

<!doctype html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/horaires.css">
        <link rel="icon" href="../img/index.ico" />
        <title>La Patriote Limoges</title>
    </head>
    <body>

        <div id="bandeau">

            <div id="image-titre">
                <img src="../img/bannière.jpg">
            </div>
            <div id="titre">
                <h1>LA PATRIOTE LIMOUSINE ET JEUNESSES COOPERATIVES REUNIES</h1>
            </div>
            
        </div>

        <nav>
            <ul>
                <li class="menu"><a href="../index.php">Accueil</a></li>
                <li class="menu"><a href="#">Inscription</a>
                    <ul class="submenu">
                        <li><a href="inscription.php">Inscription</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                </li>
                <li class="menu" id="active"><a href="#">Activités</a>
                    <ul class="submenu">
                        <li><a href="babygym.php">Babygym</a></li>
                        <li><a href="accessgym.php">Access Gym</a></li>
                        <li><a href="horaires.php">Horaires</a></li>
                    </ul>
                </li>
                <li class="menu"><a href="#">Le club</a>
                    <ul class="submenu">
                        <li><a href="historique.php">Historique</a></li>
                        <li><a href="entraineurs.php">Entraineurs</a></li>
                    </ul>
                </li>
                <li class="menu"><a href="#">Nous contacter</a>
                    <ul class="submenu">
                        <li><a href="noustrouver.php">Nous trouver</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="contenu" id="inscription">
            <h1>Horaires des entraînements des groupes compétitifs</h1>
            <p>Tous les groupes compétitifs s'entrainent à La Borie.</p>

            <table>
                   <tr>
                       <td>Groupes Compétitifs</td>
                       <td>Horaires</td>
                   </tr>

            <?php

                include("../php/connexion.php");
                
                $reponse = $db->query('SELECT * FROM horaire_groupe_compet');

                while ($donnees = $reponse->fetch()){

                    echo"   <tr>";
                    echo"       <td>".$donnees['groupe']."</td>";
                    echo"       <td>".$donnees['horaire']."</td>";
                    if(isset($_SESSION['usrnm'])) {
                        echo"       <td>";
                        echo"           <form method=\"POST\" action=\"../php/modif-horaire-groupe-compet.php?id=".$donnees['id']."\" />";
                        echo"               <input type=\"text\" name=\"group\" id=\"group\" placeholder=\"Groupe\" />";
                        echo"               <input type=\"text\" name=\"horaire\" id=\"horaire\" placeholder=\"Horaire\" />";
                        echo"               <input type=\"submit\" name=\"submit\" value=\"Modifier\" />";
                        echo"           </form>";
                        echo"       </td>";
                    }
                    echo"   </tr>";
                    

                }

                echo"</table>";

            ?>

            <h1>Horaires des Groupes Adultes</h1>
            <p>Les cours des groupes Baby Gym, écoles des Gym, Gym d'entretien se déroulent tous dans Le Gymnase de la Patriote (116 Avenue Montjovis).<br>
            Le cours Adultes aux Agrès se déroule à La Borie (185 Avenue Albert Thomas).</p>

            <?php

                include("../php/connexion.php");
                
                $reponse = $db->query('SELECT * FROM horaire_groupe_adulte');

                echo"<table>";

                while ($donnees = $reponse->fetch()){

                    echo"   <tr>";
                    echo"       <td>".$donnees['groupe']."</td>";
                    echo"       <td>".$donnees['horaire']."</td>";
                    if(isset($_SESSION['usrnm'])) {
                        echo"       <td>";
                        echo"           <form method=\"POST\" action=\"../php/modif-horaire-groupe-adulte.php?id=".$donnees['id']."\" />";
                        echo"               <input type=\"text\" name=\"group\" id=\"group\" placeholder=\"Groupe\" />";
                        echo"               <input type=\"text\" name=\"horaire\" id=\"horaire\" placeholder=\"Horaire\" />";
                        echo"               <input type=\"submit\" name=\"submit\" value=\"Modifier\" />";
                        echo"           </form>";
                        echo"       </td>";
                    }
                    echo"   </tr>";
                    

                }

                echo"</table>";

            ?>

            <h1>Horaires Babygym</h1>

            <?php

                include("../php/connexion.php");

                $reponse = $db->query('SELECT * FROM horaire_groupe_babygym');

                echo"<table>";

                while ($donnees = $reponse->fetch()){

                    echo"   <tr>";
                    echo"       <td>".$donnees['groupe']."</td>";
                    echo"       <td>".$donnees['horaire']."</td>";
                    if(isset($_SESSION['usrnm'])) {
                        echo"       <td>";
                        echo"           <form method=\"POST\" action=\"../php/modif-horaire-groupe-babygym.php?id=".$donnees['id']."\" />";
                        echo"               <input type=\"text\" name=\"group\" id=\"group\" placeholder=\"Groupe\" />";
                        echo"               <input type=\"text\" name=\"horaire\" id=\"horaire\" placeholder=\"Horaire\" />";
                        echo"               <input type=\"submit\" name=\"submit\" value=\"Modifier\" />";
                        echo"           </form>";
                        echo"       </td>";
                    }
                    echo"   </tr>";
                    

                }

                echo"</table>";

            ?> 

            <h1>Les Horaires Access Gym</h1>

            <?php

                include("../php/connexion.php");

                $reponse = $db->query('SELECT * FROM horaire_groupe_accesgym');

                echo"<table>";

                while ($donnees = $reponse->fetch()){

                    echo"   <tr>";
                    echo"       <td>".$donnees['groupe']."</td>";
                    echo"       <td>".$donnees['horaire']."</td>";
                    if(isset($_SESSION['usrnm'])) {
                        echo"       <td>";
                        echo"           <form method=\"POST\" action=\"../php/modif-horaire-groupe-accesgym.php?id=".$donnees['id']."\" />";
                        echo"               <input type=\"text\" name=\"group\" id=\"group\" placeholder=\"Groupe\" />";
                        echo"               <input type=\"text\" name=\"horaire\" id=\"horaire\" placeholder=\"Horaire\" />";
                        echo"               <input type=\"submit\" name=\"submit\" value=\"Modifier\" />";
                        echo"           </form>";
                        echo"       </td>";
                    }
                    echo"   </tr>";
                    

                }

                echo"</table>";

            ?> 

        </div>
        <div id="footer">
            <div id="sponsors">
                <img src="../img/hu.jpg" alt="hyperU"/>
                <img src="../img/coop.jpg" alt="Coop"/>
                <img src="../img/hv.jpg" alt="Haute-Vienne"/>
                <img src="../img/lim.jpg" alt="Limoges"/>
                <img id="cnds" src="../img/mds.png" alt="Ministère"/>
            </div> 
            <div id="rezo">
                <p>Nous contacter :<br/>
                116 Avenue Montjovis - 87100 Limoges <br/> Téléphone : <span class="info"> 05 55 77 90 94</span> - Mail : <span class="info">patriote-coop.87@ffgym.com</span> <br/> Ou sur <a href="https://www.facebook.com/lapatriotegymlimoges/" target="blank">Facebook</a></p>
            </div>  
            <div id="conn">
                <?php 
                    if(isset($_SESSION['usrnm'])) {
                        echo('Bonjour '.$_SESSION['usrnm'].'!'); 
                        echo('<p><a href="../php/logout.php">Déconnexion</a></p>');
                    }
                    else{
                        echo('<p><a href="../php/login.php">Connexion</a></p>');
                    }
                ?>
            </div>
        </div>
    </body>
</html>