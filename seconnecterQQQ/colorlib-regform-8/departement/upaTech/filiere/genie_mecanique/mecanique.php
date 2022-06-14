<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript">
		history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
		window.addEventListener("popstate", function(event) {
		window.location.assign("http://localhost/UPA/seconnecter/colorlib-regform-8/departement/upaTech/indexFiliereTechnique.php");
		});
		// C:\wamp64\www\UPA\seconnecter\colorlib-regform-8\departement\upaTech
</script> 
<title>Génie Mécanique</title>

</head>
<body>
	<p>filiere Génie Mécanique</p>
	<p>choisir le niveau</p>
	<a href="niveaux\licence1\licence1GM.php?licence1GM=val">
		<input type="submit" name="licence1GM" value="licence 1"></a>

<!--  -->
	<a href="niveaux\licence2\licence2GM.php?licence2GM=val">
		<input type="submit" name="licence2GM" value="licence 2"></a>

<!--  -->
	<a href="niveaux\licence3\licence3GM.php?licence3GM=val">
		<input type="submit" name="licence3GM" value="licence 3"></a>
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