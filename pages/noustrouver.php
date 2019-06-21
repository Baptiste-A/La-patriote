<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/noustrouver.css">
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

        <div id="table">
            <div class="ligne">
                <div class="cellule" id="map">
                    <iframe src="https://www.google.com/maps/d/embed?mid=15CUhzjiLhpOwtJ8szCX1UOJDeia8G_bT"></iframe>
                </div>
                <div class="cellule" id="texte">
                    <div class="contenu" id="droite">
                        <h1>Nos gymnases</h1>
                        <p>Avec plus de 300 licenciés depuis 2012, et 365 licenciés en 2016-2017, La Patriote a créé depuis 10 ans  2 plate-formes d'entraînement :
                            <ul>
                                <li>Gymnase historique : 116 Avenue Montjovis - 87100 Limoges.</li>
                                <li>Seconde plate-forme : 185 Rue Albert Thomas - 87100 Limoges à l'intérieur du SUAPS (Service Universitaire des Activités Physiques et Sportives) dans 
                                    l'enceinte de la faculté de "la Borie" à Limoges.</li>
                            </ul>
                            Renseignez - vous bien lors de l'inscription du licencié pour connaître le lieu des entraînements.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
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
</html>