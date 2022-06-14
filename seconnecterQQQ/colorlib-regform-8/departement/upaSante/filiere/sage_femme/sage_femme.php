<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>sage_femme</title>
	<script type="text/javascript">
		history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
		window.addEventListener("popstate", function(event) {
		window.location.assign("http://localhost/UPA/seconnecter/colorlib-regform-8/departement/upaSante/filiere/indexFiliereSante.php");
		});
</script> 
</head>
<body>	
	<a href="..\indexFiliereSante.php"> <input type="submit" name="retour" value=retour></a>

	<p>filiere sage femme</p>
	<p>choisir le niveau</p>
	<a href="niveaux\licence1\licence1SF.php?licence1SF=val">
		<input type="submit" name="licence1SF" value="licence 1"></a>

<!--  -->
	<a href="niveaux\licence2\licence2SF.php?licence2SF=val">
		<input type="submit" name="licence2SF" value="licence 2"></a>

<!--  -->
	<a href="niveaux\licence3\licence3SF.php?licence3SF=val">
		<input type="submit" name="licence3SF" value="licence 3"></a>	
	<a href="#">
		<input type="submit" name="XXX" value="Modifier filiere"></a>
	<?php

	    if(isset($_GET['licence1']))
	        { 
	        	echo "licence 1 Sage Femme";
	        	?>
	        	 <label for="mail">Choisir Résponsable Pédagogique :</label>
    			<input type="email" id="mail" name="user_email" />
	       
	   <?php }               
	?>

</body>
</html>