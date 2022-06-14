
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

<p>Avancement de la tâche à effectuer :
       <progress id="avancement" value="0" max="12"></progress>
       <span id="pourcentage"></span>
       <input type="button" onclick="modif(-1);" value="-">
       <input type="button" onclick="modif(1);" value="+">
</p>
<?php 
// if(isset($_GET['var1']))
// {
// $_SESSION['var1']=$_GET['var1'];
// echo $_GET['var1'];
// }
// if((isset($_GET['var1']))||(empty($_SESSION['password'])) )


?>
		<script>
// <!--  var variableRecuperee = <?php //echo json_encode($_SESSION['var1']); ?>;
 --></script>

 
<script type="text/javascript">
	function avancement() {
  var ava = document.getElementById("avancement");
  var prc = document.getElementById("pourcentage");
// ana.value=<?php// echo json_encode($_SESSION['var1']); ?>;
  prc.innerHTML = ava.value + "Heure";
}

avancement(); //Initialisation

function modif(val) {
  var ava = document.getElementById("avancement");
  if((ava.value+val)<=ava.max && (ava.value+val)>0) {
     ava.value += val;
  }
  avancement();
  window.location.href = "professeur.php?var1=" + ava.value ;
  // alert(ava.value);
  // document.write(ava.value);
  // document.write(ava.value);
}
// COMMENT RECUPERER LA VALEUR D'UNE VARIABLE JS EN PHP

</script>

<?php

// }


 ?>
	<br><br>

<fieldset>
	<legend>Suivre Execution des cours</legend>
</fieldset>
<?php
			echo' <br><br></br>';
// $matiereX="sociologie";
		// $matiereX=trim(addslashes($matiereX));
// echo $matiereX;
			 

	
			 $conn1=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
		   $sql1=$conn1->prepare("SELECT * FROM emploi_temps_licence1_sf");
		   $sql1->execute(); 
       $_SESSION['mytab'] = array();
		   while($data1=$sql1->fetch())
		   {
		 // $age = array("matiere8"=>" ", "matiere10"=>" ", "matiere13"=>" ", "matiere14"=>" ", "matiere16"=>" ");

// $data1=$sql1->fetchALL();
		// $matiere8 signift matiere de h à 10
		   $matiere8=$data1['8h_10h'];
		// $matiere8=trim(addslashes($matiere8));
		   $matiere10=$data1['10h_12h'];
		   $matiere13=$data1['13h_14h30'];
		   $matiere14=$data1['14h30_16h'];
		   $matiere16=$data1['16h_18h'];
     

     $_SESSION['mytab'][] = $matiere8;
     $_SESSION['mytab'][] = $matiere10;
     $_SESSION['mytab'][] = $matiere13;
     $_SESSION['mytab'][] = $matiere14;
     $_SESSION['mytab'][] = $matiere16;


			// foreach ($mytab as $i => $value)
			//       {
			//       	echo $mytab[$i];
			//       	echo"<br>";
			//       }

      $_SESSION['myTabUnique'] = array_unique($_SESSION['mytab']);
	foreach ($_SESSION['myTabUnique'] as $value)
      {
      	// echo $myTabUnique[$i];
      
			 $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
		   $sql2=$conn2->prepare("SELECT professeur, matiere, quantum_horraire FROM sm1_licence1_sage_femme where matiere='".$value."' ");
		   $sql2->execute(); 
		   $data2=$sql2->fetch();
		   echo $data2['professeur'];
		   echo" ";
		   echo $data2['matiere'];
		   echo" ";
		   echo $data2['quantum_horraire'];
		   echo"<br>";
		   	// if($data1==)

		   }
}


	  	 // $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
		   // $sql3=$conn->prepare("SELECT professeur FROM sm1_licence1_sage_femme where matiere='".$matiereX."'  ");
		   // $sql3->execute(); 
		   // $data=$sql3->fetch();
		   // echo $data['professeur'];


	
	  // $sql3=$conn->prepare("SELECT email, password from professeur where email ='".$email."' AND password ='".$password."'  ");

// $var="titi";
// $var2="titi2";

// $arr = array();
// $arr[] = $var;
// $arr[] = $var2;
// print_r($arr);





    // $mytab = array(88, 99, 22, 33,88, 66,88,22);
      // for($i=0;$i<=length($mytab);$i++)

		  //  	$var="titi";
				// $var2="titi2";
				// $var3="titi3";
				// $var4="titi2";
				// $arr = array();
				// $arr[] = $var;
				// $arr[] = $var2;
				// $arr[] = $var3;
				// $arr[] = $var4;
				// echo $arr[$var2];






      // foreach ($arr as $i => $value)
      // {
			
      // 	echo $arr[$i];
      // 	echo"<br>";
     
      // }
// $myTabUnique = array_unique($arr);
//       	      	echo"<br>";

//       	  print_r($myTabUnique);



//       $array = array(1, 2, 3, 4, 5);
// foreach ($array as $i => $value) {
//     unset($array[$i]);
// }



// $tab = array('world','hello','good','planet');
//    $element = 'hello';
//    unset($tab[array_search($element, $tab)]);

//    print_r($tab);

	

 		

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