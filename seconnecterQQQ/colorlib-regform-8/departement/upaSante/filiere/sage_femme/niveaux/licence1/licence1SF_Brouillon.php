<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>licence 1 sage femme</title>
</head>
<body>
	<p>licence 1 Sage Femme</p>
	<?php  
		if(isset($_GET['licence1SF'])||(isset($_SESSION['licence1SF'])) )
		{ 
			$_SESSION['licence1SF']=$_GET['licence1SF'];
			?>
			<p>licence 1 sage femme</p>
			<!-- <form action="licence1SF.php" method="GET"> -->
				<a href="licence1SF.php?semestre1=sem1"><input type="submit" name="semestre1" value="Semestre 1"></a>
			<!--  -->

				<a href="licence1SF.php?semestre2=sem2"><input type="submit" name="semestre2" value="Semestre 2"></a>
			<!-- </form> -->
	<?php
			if(isset($_GET['semestre1']))
			{
				echo"</br> semestre 1 du licence1 sage femme ";
			}
			else if(isset($_GET['semestre2']))
			{
				echo"</br> semestre 2 du licence1 sage femme ";
			}

			unset($_SESSION['licence1SF']);
} ?>

</body>
</html>





<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>licence 1 Sage femme</title>
</head>
<body>
	<?php 
			// global $dataX;
		

		$classe="licence 5 sage femme";
		echo $classe;
	?>

	<p>licence 1 Sage Femme</p>

<?php
	 if(empty($_GET['envoyerX'])) 
	{
	 	?>
	
	<form method="get" action="licence1SF.php">	
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
		 // echo $prenom;
		 $_SESSION['nom'] =$mots['1'];
		 $nom=$_SESSION['nom'];
		 // echo $nom;

		echo '</br>';

		$conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
		// $sql3=$conn->prepare("SELECT nom, prenom from professeur");
			   // $sql3=$conn->prepare("SELECT nom, prenom from professeur where nom ='".$nom."' AND prenom ='".$prenom."'  ");

		$sql = "INSERT INTO responsable_pedagogique (nom, prenom, classe) VALUES (?,?,?)";
		$stmt= $conn->prepare($sql);
		$stmt->execute([$nom, $prenom, $classe]);






		// $sql3=$conn-> prepare("UPDATE professeur SET Responsable_pedagogique='".$classe."' WHERE prenom='".$prenom."' AND nom='".$nom."' ");
		// $sql3->execute();

	 // echo $dataX['prenom'];



		?>
			<form method="get" action="licence1SF.php">	
				<input type="submit" name="selectY" value="Changer de Responsable Pédagogique">
			</form>
<?php
	 	}
	

		if(!empty($_GET['selectY']))
			{
					$prenom=$_SESSION['prenom'];
					$nom=$_SESSION['nom'];
		echo '</br>';

						 echo $prenom;
						 echo $nom;

				$conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
				$sql = "DELETE FROM responsable_pedagogique WHERE nom=? AND prenom=? AND classe =?";
				$stmt= $conn->prepare($sql);
				$stmt->execute([$nom,$prenom,$classe]);


				// $sql3=$conn-> prepare("UPDATE professeur SET Responsable_pedagogique=NULL WHERE prenom='".$prenom."' AND nom='".$nom."' ");
				// $sql3->execute();
				unset($_GET['selectX']);

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
		if(isset($_GET['licence1SF']))
		{ 
			?>
				<!-- LICENCE 1 SAGE FEMME -->
				<h1>Licence 1</h1>
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
				<h1>Licence 2</h1>
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