
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index Filiere sante</title>
	<script type="text/javascript">
	history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
	window.addEventListener("popstate", function(event) {
	window.location.assign("http://localhost/UPA/seconnecter/colorlib-regform-8/directeur.php");
	});
</script> 
</head>	
<body>
	<p>Choisir le filiere</p>
	<a href="sage_femme\sage_femme.php">
		<input type="submit" name="filiere_Sage_femme" value="Sage Femme"></a>

<!--  -->
	<a href="infirmier\infirmier.php">
		<input type="submit" name="filiere_Infirmier" value="Infirmier"></a>

<!--  -->
	<a href="assistant_infirmier\assistant_infirmier.php">
		<input type="submit" name="filiere_AI" value="Assistant Infirmier"></a>

<!--  -->
	<a href="biologie\Biologie.php">
		<input type="submit" name="filiere_Biologie" value="Biologie"></a>
	<a href="#">
		<input type="submit" name="XXX" value="Ajouter Filiere"></a>
</body>
</html>