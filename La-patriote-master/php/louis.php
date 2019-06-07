<?php
session_start();
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=patriote', 'root', '');

	}
	catch (PDOexception $e){
		die('Error : ' . $e->getMessage());

		}

    $req = $bdd->query("SELECT * FROM connexion");



?>

<center><h2>Présence entrainement</h2>

<table>
	<form method="post">
	  <tr>
	    <td><input type="text" name="usrnm" value="" placeholder="prénom"></td>

	  </tr>
	  <tr>
	    <td><input type="password" name="pwd" value="" placeholder="Mot de passe"></td>

	  </tr>
	  	<td><input type="submit" name="submit" value="Valider !"></td>
	  </tr>
	</form>
</table>







<?php
while ($resultat = $req->fetch())
{
	if ($_POST['usrnm'] == $resultat['usernamedb'] && $_POST['pwd'] == $resultat['passworddb'] )
	{
		header("Location: ../index.html");

	 /*CODE quand connecter */
	}
	else {
		/*CODE quand erreur */

echo("erreur");
	}
}



?>
