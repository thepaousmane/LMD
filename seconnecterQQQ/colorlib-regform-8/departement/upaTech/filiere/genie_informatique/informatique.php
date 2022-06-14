<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Génie Informatique</title>
	<script type="text/javascript">
		history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
		window.addEventListener("popstate", function(event) {
		window.location.assign("http://localhost/UPA/seconnecter/colorlib-regform-8/departement/upaTech/indexFiliereTechnique.php");
		});
		// C:\wamp64\www\UPA\seconnecter\colorlib-regform-8\departement\upaTech
</script> 
</head>
<body>
	<p>filiere Génie Informatique</p>
	<p>choisir le niveau</p>
	<a href="niveaux\licence1\licence1GI.php?licence1GI=val">
		<input type="submit" name="licence1GI" value="licence 1"></a>

<!--  -->
	<a href="niveaux\licence2\licence2GI.php?licence2GI=val">
		<input type="submit" name="licence2GI" value="licence 2"></a>

<!--  -->
	<a href="niveaux\licence3\licence3GI.php?licence3GI=val">
		<input type="submit" name="licence3GI" value="licence 3"></a>
	<a href="#">
		<input type="submit" name="XXX" value="Modifier filiere"></a>
	<?php

	    if(isset($_GET['1gfdtrd']))
	        { 
	        	echo "semestre 1";
	        }               
	?>



</body>
</html>