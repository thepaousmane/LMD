
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index Filiere Technique</title>
	<script type="text/javascript">
	history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
	window.addEventListener("popstate", function(event) {
	window.location.assign("http://localhost/UPA/seconnecter/colorlib-regform-8/directeur.php");
	});
</script> 
</head>
<body>
	<p>Génie Technique</p>
	<p>Choisir le filiere</p>
	<a href="filiere\genie_civil\genie_civil.php">
		<input type="submit" name="genie_civil" value="Génie Civil"></a>

<!--  -->
	<a href="filiere\genie_informatique\informatique.php">
		<input type="submit" name="genie_informatique" value="Génie Informatique"></a>

<!--  -->
	<a href="filiere\genie_mecanique\mecanique.php">
		<input type="submit" name="genie_mecanique" value="Génie Mécanique"></a>
	<a href="#">
		<input type="submit" name="XXX" value="Ajouter Filiere"></a>


<!--  -->
</body>
</html>