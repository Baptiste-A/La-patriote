<?php session_start(); ?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/babygym.css">
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
            <h1>La Gymnastique dès 15 mois, c'est possible !</h1>
            <p>La pratique de la gymnastique peut être débutée à la Patriote dès 15 mois que l’on soit une fille ou un garçon.<br>
                La Baby Gym est une activité à caractère ludique. Les consignes utilisées sont claires, simples et précises. <br>
                <strong>Les situations proposées sont variées, attractives et évolutives selon l’âge de votre enfant. La baby Gym c’est un premier pas vers l’autonomie. 
                Pour cela nous favorisons l’exploration spontanée de votre enfant, la créativité, l’imitation, la sollicitation de la prise de risque en toute sécurité 
                et la socialisation des enfants.</strong><br>
                Quand on arrive en moyenne section et que l’on pratique la Gymnastique, on s’appelle depuis plusieurs années un éveil.<br>
                Au club, nous sommes une abeille si l’on est en Moyenne Section et une Chouette si l’on est en grande section de Maternelle.<br>
                Aujourd’hui la FFGym revoit tout son Programme pour les 15 mois – 6 ans et afin de lisser la discipline, tous nos enfants s’appelleront des Baby Gym jusqu’à leurs 6 ans. <br>
                Aujourd’hui j’ai 4 ans, je suis en moyenne Section, je suis un Baby Gym 4 et toujours une abeille.<br>
                J’ai 5 ans, je suis en Grande Section, je suis un Baby Gym 5, je suis une Chouette et je découvre l’ACCESS Gym que je continuerai chez les grands en Ecole de Gym
                l’an prochain. </p>
        </div>

        <div class="contenu" id="horaires">
            <h1>Horaires 2018-2019</h1>

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

            <br>
        </div>

        <div class="contenu">
            <p>La Patriote vous informe : L'enfant pratiquant la Baby Gym 1-2-3 est accompagné par un de ses proches tout au long de la Séance.</p>
        </div>

        <div class="contenu">
            <h1>Le label Baby Gym, qu'est ce que c'est ?</h1>
            <p>La FFGym soucieuse de garantir à ses licenciés des prestations de qualité délivre depuis près de 15 ans des labels Petite enfance.<br>
                Charte de qualité et de sécurité, le label Petite enfance n'est jamais définitivement acquis pour un club  et est renouvelable tous les 4 ans.<br>
                La Patriote Limousine possède ce Label depuis 2001 et l'a renouvelé pour la dernière fois en septembre 2014 et travaille sur son renouvellement en 2018.<br>
                Ce label est attribué si les clubs FFGym  suivent des pratiques répondant à un cahier des charges précis, si les encadrants sont diplômés ou formés par le Club,
                si le club possède le matériel pédagogique adapté à la pratique de la Baby Gym.</p>
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