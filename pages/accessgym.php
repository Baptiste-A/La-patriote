<?php session_start(); ?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/accessgym.css">
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

        <div class="contenu">
                <h1>l'Access Gym : Pour apprendre et se faire plaisir ! </h1>
                <p>A 6 ans, on a parfois envie de commencer la Gym mais on ne rentre pas tout de suite en compétition si l'on a pas pratiqué la Gym aux agrès avant. <br>
                    Ou alors on a envie de se faire plaisir en sortant du groupe Baby Gym. A La Patriote,  c'est possible ! <br>
                    Les objectifs de l'école de gym sont les suivants : 
                    <ul>
                        <li>Le développement de la coordination motrice</li>
                        <li>L'initiation à la gymnastique</li>
                        <li>Le perfectionnement de loisir</li>
                    </ul>
                    La Patriote Limousine propose 4  groupes d'école de Gym de différents niveaux, consacrés à la Gym Loisir non compétitive : 
                    <ul>
                        <li>L'école de Gym 1 de 6 à 9 ans (groupes mixtes)</li>
                        <li>L'école de Gym 2 de 9 à 12 ans</li>
                        <li>L'école de Gym GAM ( spécifique agrès garçons) de 6 à 8 ans pour le Perfectionnement (sur proposition de l'entraîneur) et de 9 à 12 ans pour l'initiation</li>
                        <li>L'école de Gym "Loisirs Ado" de 12 à 15 ans qui permet aux gymnastes féminines qui ne souhaitent pas faire de compétitions d'intégrer un Groupe 
                            "Loisir-Perfectionnement"</li>
                    </ul>
                    Depuis septembre 2015, La Patriote Limousine suit le programme Access Gym de la Fédération Française de Gymnastique. 
                </p>
            </div>
    
            <div class="contenu" id="horaires">
                <h1>Les Horaires des groupes Access Gym 2018-2019</h1>

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

               
                <br>
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
                    116 Avenue Montjovis - 87100 Limoges <br/> Téléphone : <span class="info"> 05 55 77 90 94</span> <br/> Mail : <span class="info">patriote-coop.87@ffgym.com</span> <br/> Ou sur <a href="https://www.facebook.com/lapatriotegymlimoges/" target="blank">Facebook</a></p>
                </div>  
                <div id="conn">
                    <?php 
                        if(isset($_SESSION['usrnm'])) {
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