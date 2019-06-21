<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/inscription.css">
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
                <li class="menu" id="active"><a href="#">Inscription</a>
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
                <li class="menu"><a href="#">Nous contacter</a>
                    <ul class="submenu">
                        <li><a href="noustrouver.php">Nous trouver</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="contenu" id="inscription">
            <h2>Comment s'inscrire ?<span class="red" id="etoile">**</span></h2>
            <table>
                <tr>
                    <td class="instruction"><span class="numero">1.</span> Télécharger puis remplir la fiche d'inscription.</td>
                    <td class="btn"><a href="#" class="bouton">FICHE D'INSCRIPTION</a></td>
                </tr>
                <tr>
                    <td class="instruction"><span class="numero">2.</span> Fournir un certificat médical d'aptitude à la pratique de la Gymnastique aux agrès au nom du licencié
                        datant de moins de 3 mois.</td>
                </tr>
                <tr>
                    <td class="instruction"><span id="ou">OU</span> l'attestation médicale<span class="red">*</span> à remplir.</td>
                    <td class="btn"><a href="#" class="bouton">ATTESTATION MEDICALE</a></td>
                </tr>
                <tr>
                    <td class="instruction"><span class="numero">3.</span> Le bulletin d'adhésion ALLIANZ fourni sur place lors de l'inscription.</td>
                </tr>
                <tr>
                    <td class="instruction"><span class="numero">4.</span> 3 timbres au tarif lettre verte (4 Timbres en tout pour 2 licenciés ou plus).</td>
                </tr>
                <tr>
                    <td class="instruction"><span class="numero">5.</span> Le règlement de la cotisation annuelle (Règlements acceptés par  Chèque, espèces, bons CAF, coupons
                         Sports, chèques vacances )<br>
                         Nouveauté Rentrée 2018 : possibilité de régler en 6 fois au moment de l’inscription pour un encaissement échelonné (encaissés de manière échelonnée : Mois
                         à noter au dos).Pour la gestion des dossiers, 1 règlement est demandé par dossier.</td>
                </tr>
                <tr>
                    <td class="instruction"><span class="numero">6.</span> La fiche Sanitaire.</td>
                    <td class="btn"><a href="#" class="bouton">FICHE SANITAIRE</a></td>
                </tr>
                <tr>
                    <td class="instruction"><span class="numero">7.</span> Un chèque de Caution de 50€ par licencié pour les groupes compétitifs.</td>
                </tr>
                <tr>
                    <td class="instruction" id="texte-rouge"><span class="red"><span class="numero">*  </span>L'attestation médicale remplace le certificat médical dans le cas où la personne 
                        était licenciée l'année 2017-2018 et avait fourni le certificat médical de non contre-indication de pratique à la gymnastique. Les compétiteurs doivent fournir un 
                        certificat médical tous les ans.</span></td>
                </tr>
                <tr>
                    <td class="instruction" id="texte-rouge"><span class="red"><span class="numero">**  </span>Tous les documents sont à imprimer et à fournir lors de l'inscription, SAUF la fiche 
                        d'inscription (pour les personnes déjà licenciées au club l'an passé) et le bulletin d'adhésion ALLIANZ (automatiquement fourni par le club). </span></td>
                </tr>
            </table>
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