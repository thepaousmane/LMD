<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Assistant Infirmier</title>
	<script type="text/javascript">
		history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
		window.addEventListener("popstate", function(event) {
		window.location.assign("http://localhost/UPA/seconnecter/colorlib-regform-8/departement/upaSante/filiere/indexFiliereSante.php");
		});
</script> 
</head>
<body>
	<p>filiere Assistant Infirmier</p>
	<p>choisir le niveau</p>
	<a href="niveaux\licence1\licence1AI.php">
		<input type="submit" name="licence1AI" value="licence 1"></a>

<!--  -->
	<a href="niveaux\licence2\licence2AI.php">
		<input type="submit" name="licence2AI" value="licence 2"></a>

<!--  -->
	<a href="niveaux\licence3\licence3AI.php">
		<input type="submit" name="licence3AI" value="licence 3"></a>
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