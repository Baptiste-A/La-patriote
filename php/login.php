<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="../css/login.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="usrnm" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="pwd" required>

                <input type="submit" id='submit' value='LOGIN' >
                
            </form>
        </div>
    </body>
</html>