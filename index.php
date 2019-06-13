<?php session_start(); ?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
    <?php
        include("php/connexion.php");

        $req = $db->query('SELECT * FROM photo ORDER BY id DESC LIMIT 1');
        $resultat = $req->fetch();  
        
        $reqd = $db->query('SELECT * FROM photod ORDER BY idd DESC LIMIT 1');
        $resultatd = $reqd->fetch(); 
    ?>
    <section id="wrap">
        <div id="bandeau">

            <div id="image-titre">
                <img src="img/bannière.jpg">
            </div>
            <div id="titre">
                <h1>LA PATRIOTE LIMOUSINE ET JEUNESSES COOPERATIVES REUNIES</h1>
            </div>
            
        </div>

        <nav>
            <ul>
                <li class="menu" id="active"><a href="index.php">Accueil</a></li>
                <li class="menu"><a href="#">Inscription</a>
                    <ul class="submenu">
                        <li><a href="pages/inscription.html">Inscription</a></li>
                        <li><a href="pages/faq.html">FAQ</a></li>
                    </ul>
                </li>
                <li class="menu"><a href="#">Activités</a>
                    <ul class="submenu">
                        <li><a href="pages/babygym.html">Babygym</a></li>
                        <li><a href="pages/accessgym.html">Access Gym</a></li>
                        <li><a href="pages/horaires.html">Horaires</a></li>
                    </ul>
                </li>
                <li class="menu"><a href="#">Le club</a>
                    <ul class="submenu">
                        <li><a href="pages/historique.html">Historique</a></li>
                        <li><a href="pages/entraineurs.php">Entraineurs</a></li>
                    </ul>
                </li>
                <li class="menu"><a href="#">Nous contacter</a>
                    <ul class="submenu">
                        <li><a href="pages/noustrouver.html">Nous trouver</a></li>
                        <li><a href="pages/contact.html">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="contenu" id="gauche">
            <img src=<?php  echo($resultat['chemin']); ?> alt="image"/>
        </div>

        <div class="contenu" id="droite">
            <img src=<?php  echo($resultatd['chemind']); ?> alt="image"/>
        </div>
        <?php if (isset($_SESSION['usrnm'])) {?>
            <form method="POST" enctype="multipart/form-data">
                <div id="form-gauche">
                    <input type="file" name="photo" /><br>
                    <label for="nom">Nom de l'image :</label>
                    <input type="text" name="nom" id="nom"/><br />
                </div>

                <div id="form-droite">
                    <input type="file" name="photod" /><br>
                    <label for="nomd">Nom de l'image :</label>
                    <input type="text" name="nomd" id="nomd"/><br />
                </div>
                <input type="submit" name="submit" value="Envoyer" />

            </form>
        <?php } ?>
        <?php 
            include("php/connexion.php");

            if (isset($_POST['nom']) && isset($_FILES['photo']['name']) && isset($_FILES['photo']['tmp_name'])) {
                $nom = $_POST['nom'];
                $file_name = $_FILES['photo']['name'];
                $file_tmp_name = $_FILES['photo']['tmp_name'];
                $file_dest = 'img/'.$file_name;

                if(move_uploaded_file($file_tmp_name, $file_dest)){
                    $req = $db->prepare('INSERT INTO photo(nom, chemin) VALUES(?,?)');
                    $req->execute(array($nom, $file_dest));
                    echo("<p id=\"resultat-droite\" class=\"succes\">Succès</p>");
                }else{
                    echo("<p id=\"resultat-droite\" class=\"erreur\">Erreur</p>");
                }
            }

            if (isset($_POST['nomd']) && isset($_FILES['photod']['name']) && isset($_FILES['photod']['tmp_name'])) {
                $nom = $_POST['nomd'];
                $file_name = $_FILES['photod']['name'];
                $file_tmp_name = $_FILES['photod']['tmp_name'];
                $file_dest = 'img/'.$file_name;

                if(move_uploaded_file($file_tmp_name, $file_dest)){
                    $req = $db->prepare('INSERT INTO photod(nomd, chemind) VALUES(?,?)');
                    $req->execute(array($nom, $file_dest));
                    echo("<p id=\"resultat-gauche\" class=\"succes\">Succès</p>");
                }else{
                    echo("<p id=\"resultat-gauche\" class=\"erreur\">Erreur</p>");
                }
            }
        ?>
        
        <div id="footer">
            <div id="sponsors">
                <p>Nos sponsors :<br/>
                <img src="img/hu.jpg" alt="hyperU"/>
                <img src="img/coop.jpg" alt="Coop"/>
                <img src="img/hv.jpg" alt="Haute-Vienne"/>
                <img src="img/lim.jpg" alt="Limoges"/>
                <img id="cnds" src="img/mds.png" alt="Ministère"/>
            </div> 
            <div id="rezo">
                <img src="img/fb.png" alt="fb"/>
            </div>  

            
            
            <?php 
                if(isset($_SESSION['usrnm'])) {
                    echo('Bonjour '.$_SESSION['usrnm'].'!'); 
                    echo('<li id="active"><a href="php/logout.php">Déconnexion</a></li>');
                }
                else{
                    echo('<li id="active"><a href="php/login.php">Connexion</a></li>');
                }
            ?>
        </div>
    </section>
    </body>
</html>