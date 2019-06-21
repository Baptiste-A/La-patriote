<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/contact.css">
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
                <li class="menu"><a href="#">Activités</a>
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
                <li class="menu" id="active"><a href="#">Nous contacter</a>
                    <ul class="submenu">
                        <li><a href="noustrouver.php">Nous trouver</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="contenu" id="contact">
            <form id="contact" method="post" action="../php/email.php">
                <h1>Nous contacter</h1>
                <table>
                    <tr>
                        <td><label for="nom">Nom Prénom : </label></td>
                        <td><input type="text" id="nom" name="nom"/></td>
                    </tr>
                    <tr>
                        <td><label for="email">E-Mail : </label></td>
                        <td><input type="email" id="email" name="email"/></td>
                    </tr>
                    <tr>
                        <td><label for="message">Message : </label></td>
                        <td><textarea id="message" name="message" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td><input id="reset" type="reset" value="Annuler"/></td>
                        <td><input type="submit" name="submit" value="Envoyer" /></td>  
                    </tr>
                </table>
            </form>
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