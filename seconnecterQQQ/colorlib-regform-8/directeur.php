<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>directeur</title>
		<script type="text/javascript">
	history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
	window.addEventListener("popstate", function(event) {
	window.location.assign("http://localhost/UPA/index-mp-layout1.php");
	});
</script> 

</head>
<body>
	<a href="#"><input type="submit" name="se_deconnecter" value="Se Déconnecter"></a>
<?php 
// isset — Détermine si une variable est déclarée et est différente de null
// empty() - Détermine si une variable est vide
// if (isset($_POST['email']) &&  isset($_POST['password'])) 

// if(empty($_POST['email']))
// {
// 	echo'email existe pas</br>';
// }else{
// 	echo'email existe  </br>';
// }


if((!empty($_POST['email']))&&(!empty($_POST['password'])))
{
	$email=$_POST['email'];
	$var_email='momathiam@gmail.com';
	// 
	// 
	$var_mdp=$_POST['password'];
	$mdp='momathiam123';
		if(($email==$var_email)&&($mdp==$var_mdp))
		{
			echo'email et mdp correcte';
			// echo $_POST['email'];
		}else{
			echo'email ou mdp incorrecte';
			echo'</br>';
					// echo $_POST['email'];
		}
}else if((!empty($_POST['email']))&&(empty($_POST['password']))){
	echo'vieullez remplir le mdp';
}
else if((empty($_POST['email']))&&(!empty($_POST['password']))){
	echo"vieullez remplir l'email";
}
else if((empty($_POST['email']))&&(empty($_POST['password']))){
	echo'veuillez remplir le formulaire';
}
?>
  <!-- Header -->

<!-- <p>c'est le directeur</p> -->
<p> Bienvenue  Directeur</p>

<!-- departement\upaSante\filiere -->
<a href="departement\upaSante\filiere\indexFiliereSante.php"> <input type="submit" name="UPAS" value="UPAS"></a>
<a href="departement\upaTech\indexFiliereTechnique.php"><input type="submit" name="UPAG" value="UPAT"></a>
<input type="submit" name="UPAT" value="UPAG">
<a href="departement\upaTech\indexFiliereTechniqueXXX.php"><input type="submit" name="UPAG" value="CREER DEPARTEMENT"></a>


</body>
</html>