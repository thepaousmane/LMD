<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>licence 2 infrimier</title>
</head>
<script type="text/javascript">
		history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
		window.addEventListener("popstate", function(event) {
		window.location.assign("http://localhost/UPA/seconnecter/colorlib-regform-8/departement/upaSante/filiere/infirmier/infirmier.php");
		});
		// C:\wamp64\www\UPA\seconnecter\colorlib-regform-8\departement\upaSante\filiere\infirmier
	</script>
<body>
	<a href="..\..\infirmier.php"> <input type="submit" name="retour" value=retour></a>
	<?php 
		$classe="licence 2 Infirmier";
		echo $classe;
	?>
	<p>licence 1 Sage Femme</p>
<?php
	 if(empty($_GET['envoyerX'])) 
	{
	 	?>
	
	<form method="get" action="licence2INF.php">	
	   <label>Choisir le Responsable Pédagique</label>
	   <select type="select" name="selectX" multiple size="2">
	<?php 
		$conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
		$sql3=$conn->prepare("SELECT nom, prenom from professeur");
		$sql3->execute();
		$data=$sql3->fetchALL();
		foreach ($data as $dataX)
		{
			?>  
			 <option value="<?php echo $dataX['prenom'].' '.$dataX['nom']; ?>"><?php echo $dataX['prenom'].' '.$dataX['nom']; ?></option> 
	<?php
		}
			?>
		</select>
			<input type="submit" name="envoyerX" value="Envoyer">
	</form>

<?php
	 
	}	

	 if(!empty($_GET['selectX']))
	 {
	 	//unset($_GET['envoyerX']);
	 	$toto=$_GET['selectX'];
		echo'Vous avez choisit :  ';
		echo $toto;
		$mots = explode(" ", $toto);
		 $_SESSION['prenom']=$mots['0'];
		 $prenom=$_SESSION['prenom'];
		 $_SESSION['nom'] =$mots['1'];
		 $nom=$_SESSION['nom'];

		echo '</br>';

		$conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
		$sql = "INSERT INTO responsable_pedagogique (nom, prenom, classe) VALUES (?,?,?)";
		$stmt= $conn->prepare($sql);
		$stmt->execute([$nom, $prenom, $classe]);

		?>
			<form method="get" action="licence2INF.php">	
				<input type="submit" name="selectY" value="Changer de Responsable Pédagogique">
			</form>
<?php
	 	}
	
		if(!empty($_GET['selectY']))
		{
			$prenom=$_SESSION['prenom'];
			$nom=$_SESSION['nom'];
		echo '</br>';

			$conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
			$sql = "DELETE FROM responsable_pedagogique WHERE nom=? AND prenom=? AND classe =?";
			$stmt= $conn->prepare($sql);
			$stmt->execute([$nom,$prenom,$classe]);
			unset($_SESSION['nom']);
			unset($_SESSION['prenom']);
			unset($classe);
			unset($_GET['selectX']);
			session_destroy();
		}
		if((!empty($_GET['envoyerX']))&&(empty($_GET['selectX'])))
		{
			echo"Veuillez choisir un Résponsable pédagogique";
		}
	?>
		<br>
		<br>
		<br>
		<br>

		<a href="mailto:jwillette@monsite.com">Ecrivez-moi</a>
	<?php  
		if(isset($_GET['licence2INF']))
		{ 
			?>
				<!-- LICENCE 1 SAGE FEMME -->
				<h1>Semestre 1</h1>
				<table border="1">
					<thead>
					<tr>
						<th>
							Compétence visé
						</th>	
						<th>
							Unité d'enseignement
						</th>						
						<th>
							Note final
						</th>
					</tr>
					</thead>
					<tr>
						<td>
							Intervenir en Santé Communautaire
						</td>
						<td>
							Hygiène Assainissement
						</td>
						<td>
							16/20
						</td>
					</tr>
				</table>
				<a href="semestre1.php?semestre1=sem1"><input type="submit" name="semestre1" value="Modidier"></a>

				<!-- LICENCE 2 SAGE FEMME -->
				<h1>Semestre 2</h1>
				<table border="1">
					<thead>
					<tr>
						<th>
							Compétence visé
						</th>	
						<th>
							Unité d'enseignement
						</th>						
						<th>
							Note final
						</th>
					</tr>
					</thead>
					<tr>
						<td>
							Assurer la prise en charge des pathologies médico-chirugicales
						</td>
						<td>
							Pédiatrie
						</td>
						<td>
							12/20
						</td>
					</tr>
				</table>
				<a href="semestre2.php?semestre2=sem2"><input type="submit" name="semestre2" value="Modifier"></a>
	<?php
		 }
 			?>

</body>
</html>