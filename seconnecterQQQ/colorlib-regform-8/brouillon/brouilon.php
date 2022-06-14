professeur
// isset — Détermine si une variable est déclarée et est différente de null
// empty() - Détermine si une variable est vide
// if (isset($_POST['email']) &&  isset($_POST['password'])) 

// if(empty($_POST['email']))
// {
// 	echo'email existe pas</br>';
// }else{
// 	echo'email existe  </br>';
// }


// if((!empty($_POST['email']))&&(!empty($_POST['password']))&&(!empty($_POST['nom']))&&(!empty($_POST['prenom']))&&(!empty($_POST['re_mdp'])) )
// {
// 	$email=$_POST['email'];
// 	$var_email='momathiam@gmail.com';
// 	// 
// 	// 
// 	$var_mdp=$_POST['password'];
// 	$mdp='momathiam123';
// 		if(($email==$var_email)&&($mdp==$var_mdp))
// 		{
// 			echo'email et mdp correcte';
// 			// echo $_POST['email'];
// 		}else{
// 			echo'email ou mdp incorrecte';
// 			echo'</br>';
// 					// echo $_POST['email'];
// 		}

// }else if((!empty($_POST['email']))&&(empty($_POST['password']))){
// 	echo'vieullez remplir le mdp';
// }
// else if((empty($_POST['email']))&&(!empty($_POST['password']))){
// 	echo"vieullez remplir l'email";
// }


// else if((empty($_POST['email']))||(empty($_POST['password']))||(empty($_POST['nom']))||(empty($_POST['prenom']))||(empty($_POST['re_mdp']))  )
// {
// 	echo'veuillez revoir un champs du formulaire';
// }



<?php 
		$conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
		$sql3=$conn->prepare("SELECT nom, prenom from professeur");
		$sql3->execute();
		$data=$sql3->fetchALL();

		foreach ($data as $dataX) {
?>  
	<p><?php echo $dataX['prenom']; ?></p>
    <p><?php echo $dataX['nom']; ?></p>
<?php
}
?>

	<form method="get" action="licence1SF.php">	
	   <label>Choisir le Responsable Pédagique</label>
	   <select type="select" name="selectX" multiple size="2">
		   <option value="gif">Monsieur diop</option>
		   <option value="jpg">Madame ndiaye</option>
		   <option value="png">Monsieur Diaw</option>
		   <option value="tiff">Monsieur Faye</option>
		   <option value="bmp">Madame Déme</option>
		   <option value="svg">Monsieur Gueye</option>
		   <option value="raw">Monsieur Diallo</option>
		</select>
		<input type="submit" name="envoyer" value="Envoyer">
	</form>





	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>licence 1 sage femme</title>
</head>
<body>
	<p>licence 1 Sage Femme</p>

	<?php if(empty($_GET['envoyerX'])) 

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
		 	// unset($_GET['envoyerX']);
		 	$toto=$_GET['selectX'];
			echo'Vous avez choisit :  ';
			echo $toto;
			echo '</br>';
		?>
			<form method="get" action="licence1SF.php">	
			<input type="submit" name="selectY" value="Changer de Responsable Pédagogique">
			</form>

		 }
	
	<?php

		if(!empty($_GET['selectY']))
			{
				unset($_GET['selectX']);;
			}
		// if((!empty($_GET['envoyerX']))&&(empty($_GET['selectX'])))
		// 	{
		// 		echo"Veuillez choisir un Résponsable pédagogique";
		// 	}
	?>
<br>
<br>
<br>
<br>


<!-- <label for="pet-select">Choose a pet:</label>
<select name="pets" id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select> -->
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
} ?>

</body>
</html>