<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/faq.css">
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

        <div class="contenu" id="question">
            <h2>Que dois-je fournir au club pour m'inscrire ?</h2>

            <p><span class="red">Attention, tout dossier incomplet ne sera pas pris en compte. Vérifiez que vous avez bien tous les documents avant de venir nous rencontrer.</span>
            <ul>
                <li>La fiche d'inscription complétée (pour les personnes licenciées au club en 2016-2017, la fiche d'inscription est pré-remplie et disponible au club)</li>
                <li>3 timbres (4 par famille)</li>
                <li>Le bulletin d'adhésion Allianz (fourni sur place lors de l'inscription)</li>
                <li>2 photos d'identité </li>
                <li>UN CERTIFICAT MÉDICAL d'aptitude à la pratique de la gymnastique OBLIGATOIRE Dès  LA PREMIÈRE SÉANCE ou le retour de questionnaire médical (si le certificat a été fourni au club en 2016-2017)</li>
                <li>Le règlement de la cotisation annuelle  y compris la licence dès le jour de l'inscription  (le règlement est rendu à la personne qui ne poursuit pas au bout des 2 séances d'essai si cette dernière prévient le club).</li>
                <li>La fiche sanitaire et l'Attestation de prise en charge</li>
                <li>Un chèque de caution de 50€ par licencié pour les groupes compétitifs
            </ul></p>
        </div>

        <div class="contenu" id="question">
            <h2>Quels sont les moyens de paiement acceptés par le club ?</h2>

            <p>Les moyens de paiement acceptés par le club sont les suivants :
            <ul>
                <li>Chèques</li>
                <li>Espèces </li>
                <li>Chèques vacances</li>
                <li>Bons CAF</li>
                <li>Coupons sport</li>    
            </ul>
            <span class="red">Pour les chèques vacances, les bons CAF et les coupons sport, un chèque de caution du montant est demandé qui sera rendu à la remise de ces derniers.</span></p>
        </div>

        <div class="contenu" id="question">
            <h2>Puis-je venir m'inscrire sans imprimer les formulaires ?</h2>

            <p>Vous devez venir avec les documents en main (sauf spécification particulière) . Vous remplissez nos formulaires à l'avance tranquillement chez vous. <br>
                Vous pouvez télécharger les formulaires <a href="inscription.php" id="ici">ici</a> </p>
        </div>

        <div class="contenu" id="question">
            <h2>Puis-je faire un essai avant de m'engager ?</h2>

            <p>Oui, nous vous proposons 2  séances d'essais gratuites avant de vous inscrire définitivement. <br>
            Avant la première séance,  il faut se présenter avec le <a href="inscription.php" id="ici">dossier complet</a> y compris le certificat médical d'aptitude à la pratique de la gymnastique et le règlement
            complet. <br>
            Ensuite vous pourrez décider de vous inscrire définitivement. Toutes les inscriptions sont valables ensuite pour l'année scolaire en cours. <br>
            <span class="red">Aucun remboursement, même partiel, n'est effectué après les 2 séances d'essais.</span></p>
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