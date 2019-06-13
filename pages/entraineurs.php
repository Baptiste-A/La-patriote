<?php session_start(); ?>

<!doctype html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/entraineurs.css">
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
                        <li><a href="inscription.html">Inscription</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                </li>
                <li class="menu"><a href="#">Activités</a>
                    <ul class="submenu">
                        <li><a href="babygym.html">Babygym</a></li>
                        <li><a href="accessgym.html">Access Gym</a></li>
                        <li><a href="horaires.html">Horaires</a></li>
                    </ul>
                </li>
                <li class="menu" id="active"><a href="#">Le club</a>
                    <ul class="submenu">
                        <li><a href="historique.html">Historique</a></li>
                        <li><a href="entraineurs.php">Entraineurs</a></li>
                    </ul>
                </li>
                <li class="menu"><a href="#">Nous contacter</a>
                    <ul class="submenu">
                        <li><a href="noustrouver.html">Nous trouver</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="contenu">
            <h1>ENTRAINEURS SALARIES</h1>
        </div>
        
        <?php 
            //boucle qui affiche les entraineurs enregistrés dans la base de données
            include("../php/connexion.php");

            $reponse = $db->query('SELECT * FROM entraineur');

            while ($donnees = $reponse->fetch())
            {
                echo"<div class=\"entraineur\">";
                echo"    <h1>".$donnees['prenom']."</h1>";
                echo"    <h3>Diplômes</h3>";
                echo"    <p>".$donnees['diplome']."</p>";
                echo"    <h3>Responsable des groupes suivants</h3>";
                echo"    <p>".$donnees['groupe']."</p>";
                if(isset($_SESSION['usrnm'])) {
                    echo"<form method=\"POST\" action=\"../php/suppr-entraineur-salarie.php?id=".$donnees['id']."\"/>";
                    echo"   <input type=\"submit\" name=\"submit\" value=\"Supprimer\" />";
                    echo"</form>";
                }
                echo"</div>";
            }

            $reponse->closeCursor();
        ?>

        <?php if(isset($_SESSION['usrnm'])) { ?>
            <form method="POST" action="../php/ajout-entraineur-salarie.php">
                <label for="prenom" required>Nom PRENOM :</label>
                <input type="text" name="prenom" id="prenom" /><br />

                <label for="diplome">Diplôme(s) :</label>
                <textarea name="diplome" id="diplome">Licence STAPS <br>
Animateur des Activités Physiques Cardio-vasculaires<br>
Animateur Fédéral Baby Gym<br>
Moniteur Fédéral GAF</textarea><br />

                <label for="groupe">Groupes à charge :</label>
                <textarea name="groupe" id="groupe">Poussines Détections<br>
DFDC 1 - DFDC 2<br>
Divisions Régionales Mercredi - vendredi<br>
Divisions Inter Régionales</textarea><br />

                <input type="submit" name="submit" value="Envoyer" />
            </form>
        <?php } ?>

        <div class="contenu">
            <h1>ENTRAINEURS BENEVOLES GROUPES COMPETITIFS</h1>
        </div>

        <?php 
            //boucle qui affiche les entraineurs enregistrés dans la base de données
            include("../php/connexion.php");

            $reponse = $db->query('SELECT * FROM entraineur_benevole_compet');

            while ($donnees = $reponse->fetch())
            {
                echo"<div class=\"entraineur-benevole\">";
                echo"    <h1>".$donnees['prenom']."</h1>";
                echo"    <p>".$donnees['diplome']."</p>";
                echo"    <p>".$donnees['groupe']."</p>";
                if(isset($_SESSION['usrnm'])) {
                    echo"<form method=\"POST\" action=\"../php/suppr-entraineur-benevole-compet.php?id=".$donnees['id']."\"/>";
                    echo"   <input type=\"submit\" name=\"submit\" value=\"Supprimer\" />";
                    echo"</form>";
                }
                echo"</div>";
            }

            $reponse->closeCursor();
        ?>

        <?php if(isset($_SESSION['usrnm'])) { ?>
            <form method="POST" action="../php/ajout-entraineur-benevole-compet.php">
                <label for="prenom" required>Nom PRENOM :</label>
                <input type="text" name="prenom" id="prenom" /><br />

                <label for="diplome">Diplôme(s) :</label>
                <textarea name="diplome" id="diplome">Initiateur GAF <br>
Animateur Fédéral Petite Enfance</textarea><br />

                <label for="groupe">Groupes à charge :</label>
                <textarea name="groupe" id="groupe">EG1 & EG2 du mercredi <br>
Baby 4-5 du mercredi</textarea><br />

                <input type="submit" name="submit" value="Envoyer" />
            </form>
        <?php } ?>

        <div class="contenu">
            <h1>LES ENTRAINEURS BENEVOLES GROUPES LOISIRS</h1>
        </div>

        <?php 
            //boucle qui affiche les entraineurs enregistrés dans la base de données
            include("../php/connexion.php");

            $reponse = $db->query('SELECT * FROM entraineur_benevole_loisir');

            while ($donnees = $reponse->fetch())
            {
                echo"<div class=\"entraineur-benevole\">";
                echo"    <h1>".$donnees['prenom']."</h1>";
                echo"    <p>".$donnees['diplome']."</p>";
                echo"    <p>".$donnees['groupe']."</p>";
                if(isset($_SESSION['usrnm'])) {
                    echo"<form method=\"POST\" action=\"../php/suppr-entraineur-benevole-loisir.php?id=".$donnees['id']."\"/>";
                    echo"   <input type=\"submit\" name=\"submit\" value=\"Supprimer\" />";
                    echo"</form>";
                }
                echo"</div>";
            }

            $reponse->closeCursor();
        ?>

        <?php if(isset($_SESSION['usrnm'])) { ?>
            <form method="POST" action="../php/ajout-entraineur-benevole-loisir.php">
                <label for="prenom" required>Nom PRENOM :</label>
                <input type="text" name="prenom" id="prenom" /><br />

                <label for="diplome">Diplôme(s) :</label>
                <textarea name="diplome" id="diplome">Initiateur GAF <br>
Animateur Fédéral Petite Enfance</textarea><br />

                <label for="groupe">Groupes à charge :</label>
                <textarea name="groupe" id="groupe">EG1 & EG2 du mercredi <br>
Baby 4-5 du mercredi</textarea><br />

                <input type="submit" name="submit" value="Envoyer" />
            </form>
        <?php } ?>
                                        
        <div id="footer">
            <div id="sponsors">
                <p>Nos sponsors :<br/>
                <img src="../img/hu.jpg" alt="hyperU"/>
                <img src="../img/coop.jpg" alt="Coop"/>
                <img src="../img/hv.jpg" alt="Haute-Vienne"/>
                <img src="../img/lim.jpg" alt="Limoges"/>
                <img id="cnds" src="../img/mds.png" alt="Ministère"/>
            </div> 
            <div id="rezo">
                <img src="../img/fb.png" alt="fb"/>
            </div>  

            <?php 
                if(isset($_SESSION['usrnm'])) {
                    echo('Bonjour '.$_SESSION['usrnm'].'!'); 
                    echo('<li id="active"><a href="../php/logout.php">Déconnexion</a></li>');
                }
                else{
                    echo('<li id="active"><a href="../php/login.php">Connexion</a></li>');
                }
            ?>
        </div>
    </body>
</html>