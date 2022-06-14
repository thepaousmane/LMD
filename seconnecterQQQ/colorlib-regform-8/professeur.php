<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Professeur</title>
</head>
<body>

<p>c'est le professeur</p>

<?php 
if((!empty($_GET['email']))&&(!empty($_GET['password'])) )
{
	$_SESSION['email']=$_GET['email'];
	$_SESSION['password']=$_GET['password'];
}

if((!empty($_SESSION['email']))&&(!empty($_SESSION['password'])) )
{
	
	$email=$_SESSION['email'];
	$password=$_SESSION['password'];
	$email=trim(addslashes($email));
	

    $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
	  $sql3=$conn->prepare("SELECT email, password from professeur where email ='".$email."' AND password ='".$password."'  ");
		$sql3->execute();
		$data=$sql3->fetchALL();
		echo count($data);
		print_r($data);

		if(count($data)>0)
		{
			echo'baxna';
 		}else
		{
			echo' email ou mot de passe incorrect ';
			?>
			<script type="text/javascript">
				  window.setTimeout('window.location="http://localhost/UPA/index-mp-layout1.php"; ',2000);
			// window.location.replace("http://localhost/UPA/index-mp-layout1.php");
		</script>
<?php
					exit();
		}
//pour responsable pédagogique

		$conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
	   $sql=$conn2->prepare("SELECT classe, email from responsable_pedagogique where email ='".$email."' ");
		$sql->execute();
		$data2=$sql->fetch();
		// echo count($data2);
		$nbr = $sql->rowCount() ;
		// print_r($data2);
		$classe=$data2['classe'];
			echo' <br><br></br> partie responsable pédagogique ';
			echo' <br><br></br>';

if($nbr>0)
{
	echo 'vous êtes responsable pédagogique de la classe : '.$classe.'';
 		?>
		<fieldset>
			<legend>Inscription étudiant</legend>
			<form>
						 <div class="form-group">
		                Entrer le nombre d'étudiants de la classe <input type="text" class="form-input" name="nbr_etu" id="nbr_etu" placeholder="l'effectif des étudiants" required/>
		                <input type="submit" name="">
		           </div>
			</form>
		</fieldset>
		<br><br>


	<?php if(empty($_SESSION['emploidutemps']))	
			{
				?>
		
				<a href="emploidutemps.php">
					<input type="submit" name="" value="Gestion emploi du temps">
				</a>
		<?php }
// else if(!empty($_SESSION['emploidutemps']))
// //affichage emploi du temps---------------------------------------------------------------------------
// {

	?>
<table border="1">
			<tr>
				<td> </td>
				<td>Lundi</td>
				<td>Mardi</td>
				<td>Mercredi</td>
				<td>Jeudi</td>
				<td>Vendredi</td>
				<td>Samedi</td>
			</tr>
			<tr>
				<td>8h-10h</td>
				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 8h_10h FROM emploi_temps_licence1_sf WHERE id=1");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['8h_10h']; ?>
				</td>

			<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 8h_10h FROM emploi_temps_licence1_sf WHERE id=2");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['8h_10h']; ?>
				</td>

			<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 8h_10h FROM emploi_temps_licence1_sf WHERE id=3");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['8h_10h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 8h_10h FROM emploi_temps_licence1_sf WHERE id=4");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['8h_10h']; ?>
				</td>
				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 8h_10h FROM emploi_temps_licence1_sf WHERE id=5");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['8h_10h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 8h_10h FROM emploi_temps_licence1_sf WHERE id=6");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['8h_10h']; ?>
				</td>
			</tr>
			<tr>
				<td>10h-12h</td>
				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 10h_12h FROM emploi_temps_licence1_sf WHERE id=1");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['10h_12h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 10h_12h FROM emploi_temps_licence1_sf WHERE id=2");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['10h_12h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 10h_12h FROM emploi_temps_licence1_sf WHERE id=3");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['10h_12h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 10h_12h FROM emploi_temps_licence1_sf WHERE id=4");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['10h_12h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 10h_12h FROM emploi_temps_licence1_sf WHERE id=5");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['10h_12h']; ?>
				</td>
				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 10h_12h FROM emploi_temps_licence1_sf WHERE id=6");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['10h_12h']; ?>
				</td>
			</tr>
			<tr>
				<td>13h-14h30</td>
				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 13h_14h30 FROM emploi_temps_licence1_sf WHERE id=1");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['13h_14h30']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 13h_14h30 FROM emploi_temps_licence1_sf WHERE id=2");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['13h_14h30']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 13h_14h30 FROM emploi_temps_licence1_sf WHERE id=3");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['13h_14h30']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 13h_14h30 FROM emploi_temps_licence1_sf WHERE id=4");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['13h_14h30']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 13h_14h30 FROM emploi_temps_licence1_sf WHERE id=5");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['13h_14h30']; ?>
				</td>
				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 13h_14h30 FROM emploi_temps_licence1_sf WHERE id=6");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['13h_14h30']; ?>
				</td>
			</tr>
			<tr>
				<td>14h30-16h</td>
				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 14h30_16h FROM emploi_temps_licence1_sf WHERE id=1");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['14h30_16h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 14h30_16h FROM emploi_temps_licence1_sf WHERE id=2");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['14h30_16h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 14h30_16h FROM emploi_temps_licence1_sf WHERE id=3");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['14h30_16h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 14h30_16h FROM emploi_temps_licence1_sf WHERE id=4");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['14h30_16h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 14h30_16h FROM emploi_temps_licence1_sf WHERE id=5");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['14h30_16h']; ?>
				</td>
				<!-- <td><input type="text" name="14h30_16h_S" placeholder="matiere"></td> -->
			</tr>
			<tr>
				<td>16h-18h</td>
				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 16h_18h FROM emploi_temps_licence1_sf WHERE id=1");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['16h_18h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 16h_18h FROM emploi_temps_licence1_sf WHERE id=2");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['16h_18h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 16h_18h FROM emploi_temps_licence1_sf WHERE id=3");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['16h_18h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 16h_18h FROM emploi_temps_licence1_sf WHERE id=4");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['16h_18h']; ?>
				</td>

				<?php 
				  	 $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("SELECT 16h_18h FROM emploi_temps_licence1_sf WHERE id=5");
					   $sql3->execute(); 
					   $data=$sql3->fetch();
				?>
				<td>
							<?php echo $data['16h_18h']; ?>
				</td>
				<td><!-- <input type="text" name="" placeholder="matiere"> --></td>
			</tr>
		</table>


	<br><br>

		<fieldset>
			<legend>Suivre Execution des cours</legend>
		</fieldset>
	<?php
			echo' <br><br></br>';
// $matiereX="sociologie";
		// $matiereX=trim(addslashes($matiereX));
// echo $matiereX;

			


// ------------------DEB-------------------
	
			 $conn1=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
		   $sql1=$conn1->prepare("SELECT * FROM emploi_temps_licence1_sf");
		   $sql1->execute(); 
		   $_SESSION['mytab'] = array();
		   while($data1=$sql1->fetch())
		   {

		// $matiere8 signift matiere de h à 10
		   $matiere8=$data1['8h_10h'];
		// $matiere8=trim(addslashes($matiere8));
		   $matiere10=$data1['10h_12h'];
		   $matiere13=$data1['13h_14h30'];
		   $matiere14=$data1['14h30_16h'];
		   $matiere16=$data1['16h_18h']; 
		 }
 			 



			 $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
			 $sql2=$conn2->prepare("UPDATE sm1_licence1_sage_femme SET est_programmer ='VRAI' where matiere='".$matiere8."' || matiere='".$matiere10."' || matiere='".$matiere13."' || matiere='".$matiere14."' || matiere='".$matiere16."' ");
		   $sql2->execute();
// ------------------FIN--------------------------------------------

// ------------------affichage emploi du temps----------------------------

		   // $connX1=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
     //   $sqlX1=$connX1->prepare("SELECT est_programmer FROM sm1_licence1_sage_femme WHERE est_programmer='VRAI'");
     //   $sqlX1->execute(); 
     //   echo"<br>";
     //   $nbr=$sqlX1->rowCount();
       // echo $nbr;
       $_SESSION['i']=$nbr;

			 $conn3=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
		   $sql3=$conn3->prepare("SELECT id, professeur, matiere, quantum_horraire, quantum_horraire_cours FROM sm1_licence1_sage_femme where est_programmer='VRAI'");		
		      $sql3->execute(); 
		      $_SESSION['i']=0;
		   while($data2=$sql3->fetch()) 
		   {
		   	 $_SESSION['i']++;
			   echo $data2['professeur'];
			   echo" ";
			   echo $data2['matiere'];
			   $mat=$data2['matiere'];
			   echo" ";
			   echo $data2['quantum_horraire'];
			   // echo $data2['quantum_horraire_cours'];
			   $qh=$data2['quantum_horraire'];
			    $qhc=$data2['quantum_horraire_cours'];
			   	$_SESSION['id']=$data2['id'];
			   	// $id=$data2['id'];
				   // $_SESSION['idx'.$_SESSION['i']]
		// 		 if(empty($_SESSION['existe']))
		// 		 { 
		//       for ($_SESSION['i']=1; $_SESSION['i']<=$nbr; $_SESSION['i']++) 
		//       { 
  // // code...
		      	?>
		      		  	<!-- name="id<?php //echo $_SESSION['id']; ?>"  -->
							  	<!-- <progress name="ido" value="6<?php //echo $qhc; ?>" -->
		      	<form action=professeur.php method="GET">
							<legend>Contenu<?php echo $_SESSION['id']; ?></legend>
							  Avancement de la tâche à effectuer :
							       <progress name="ido" value="<?php echo $qhc; ?>" max="<?php echo $qh; ?>"></progress><?php echo $qhc."Heures"; ?>
							         <input type="submit" name="varXM<?php echo $_SESSION['id']; ?>" value="-">
							         <input type="submit" name="varXP<?php echo $_SESSION['id']; ?>" value="+">
						</form>
							<br>
	<?php 
				// $_SESSION['existe']=1;

				// 	}	
				// }		

			if(isset($_GET['varXM'.$_SESSION['id']]))
				{
				// unset($_SESSION['existe']);
					// $o=$_GET['varXM'.$_SESSION['id']];

					echo "l'id c'est".$_SESSION['id'];
					$idX=$_SESSION['id'];

					$connxx3=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
		   		$sqlxx3=$connxx3->prepare("SELECT quantum_horraire_cours FROM sm1_licence1_sage_femme where id='".$idX."'  ");		
		      $sqlxx3->execute();
		      $data2X=$sqlxx3->fetch();
		      $qhc=$data2X['quantum_horraire_cours'];
		      if($qhc>0)
		      {
		      	$qhc--;

		      	$connxx4=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
		   			$sqlx4=$connxx4->prepare("UPDATE sm1_licence1_sage_femme SET quantum_horraire_cours ='".$qhc."' where id='".$idX."'  ");		
		     	 	$sqlx4->execute();
		      }
		    	 else if($qhc==0)
		    	 {
		    	 	$qhc=0;

		    	 	$connxx4=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
		   			$sqlx4=$connxx4->prepare("UPDATE sm1_licence1_sage_femme SET quantum_horraire_cours ='".$qhc."' where id='".$idX."'  ");		
		     	 	$sqlx4->execute();
		    	 }
						unset($_GET['varXP'.$_SESSION['id']]);
				}
			else if(isset($_GET['varXP'.$_SESSION['id']]))
				{
					// unset($_SESSION['existe']);
					// $o=$_GET['varXM'.$_SESSION['id']];

					echo "l'id c'est".$_SESSION['id'];
					$idX=$_SESSION['id'];

					$connyy3=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
		   		$sqly3=$connyy3->prepare("SELECT quantum_horraire_cours, quantum_horraire FROM sm1_licence1_sage_femme where id='".$idX."'  ");		
		      $sqly3->execute();
		      $data2X=$sqly3->fetch();
		      $qhc=$data2X['quantum_horraire_cours'];
		      $qh=$data2X['quantum_horraire'];
		      if($qhc<$qh)
		      {
		      	$qhc++;
		      	$connx4=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
		   			$sqlx3=$connx4->prepare("UPDATE sm1_licence1_sage_femme SET quantum_horraire_cours ='".$qhc."' where id='".$idX."'  ");		
		     	 	$sqlx3->execute();
		      }    	
						unset($_GET['varXP'.$_SESSION['id']]);
				}
			
			  ?>

	<?php 
			} 

}else
	{
		echo"Vous n'etes pas responsaple pedagogique ";
	}

}
	else if((empty($_SESSION['email']))||(empty($_SESSION['password'])) )
	{
		echo'veuillez bien remplir le formulaire';
	}

?>

</body>
</html>