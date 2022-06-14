<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Biologie</title>
		<script type="text/javascript">
		history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
		window.addEventListener("popstate", function(event) {
		window.location.assign("http://localhost/UPA/seconnecter/colorlib-regform-8/departement/upaSante/filiere/indexFiliereSante.php");
		});
</script> 
</head>
<body>
	<p>filiere Biologie</p>
	<p>choisir le niveau</p>
	<a href="niveaux\licence1\licence1BIO.php?licence1BIO=val">
		<input type="submit" name="licence1INF" value="licence 1"></a>

<!--  -->
	<a href="niveaux\licence2\licence2BIO.php?licence2BIO=val">
		<input type="submit" name="licence2INF" value="licence 2"></a>

<!--  -->
	<a href="niveaux\licence3\licence3BIO.php?licence3BIO=val">
		<input type="submit" name="licence3INF" value="licence 3"></a>
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