<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>emploie du temps</title>
</head>
<body>
	<p>emploie du temps</p>
	<?php if((empty($_POST['planifier'])))
 		{
 			?>
	 <form action="emploidutemps.php" method="POST">
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
				<td>
					<input type="text" name="8h10h_L" placeholder="matiere">
				</td>

				<td><input type="text" name="8h10h_M" placeholder="matiere">
				</td>

				<td><input type="text" name="8h10h_Mc" placeholder="matiere">
				</td>

				<td><input type="text" name="8h10h_J" placeholder="matiere">
				</td>

				<td><input type="text" name="8h10h_V" placeholder="matiere">
				</td>

				<td><input type="text" name="8h10h_S" placeholder="matiere">
				</td>
			</tr>
			<tr>
				<td>10h-12h</td>
				<td><input type="text" name="10h12h_L" placeholder="matiere">
				</td>

				<td><input type="text" name="10h12h_M" placeholder="matiere">
				</td>

				<td><input type="text" name="10h12h_Mc" placeholder="matiere">
				</td>

				<td><input type="text" name="10h12h_J" placeholder="matiere">
				</td>

				<td><input type="text" name="10h12h_V" placeholder="matiere">
				</td>

				<td><input type="text" name="10h12h_S" placeholder="matiere">
				</td>
			</tr>
			<tr>
				<td>13h-14h30</td>
				<td><input type="text" name="13h12h30_L" placeholder="matiere">
				</td>

				<td><input type="text" name="13h12h30_M" placeholder="matiere">
				</td>

				<td><input type="text" name="13h12h30_Mc" placeholder="matiere">
				</td>

				<td><input type="text" name="13h12h30_J" placeholder="matiere">
				</td>

				<td><input type="text" name="13h12h30_V" placeholder="matiere">
				</td>
				<td><input type="text" name="13h12h30_S" placeholder="matiere"></td>
			</tr>
			<tr>
				<td>14h30-16h</td>
				<td><input type="text" name="14h30_16h_L" placeholder="matiere">
				</td>

				<td><input type="text" name="14h30_16h_M" placeholder="matiere">
				</td>

				<td><input type="text" name="14h30_16h_Mc" placeholder="matiere">
				</td>

				<td><input type="text" name="14h30_16h_J" placeholder="matiere">
				</td>

				<td><input type="text" name="14h30_16h_V" placeholder="matiere">
				</td>
				<!-- <td><input type="text" name="14h30_16h_S" placeholder="matiere"></td> -->
			</tr>
			<tr>
				<td>16h-18h</td>
				<td><input type="text" name="16h18h_L" placeholder="matiere">
				</td>

				<td><input type="text" name="16h18h_M" placeholder="matiere">
				</td>

				<td><input type="text" name="16h18h_Mc" placeholder="matiere">
				</td>

				<td><input type="text" name="16h18h_J" placeholder="matiere">
				</td>

				<td><input type="text" name="16h18h_V" placeholder="matiere">
				</td>
				<td><!-- <input type="text" name="" placeholder="matiere"> --></td>
			</tr>
		</table>
		<input type="submit" name="planifier" value="planifier">
	 </form>

<?php } ?>


	 <?php if((!empty($_POST['planifier'])))
	 {
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
				<td>
				<?php
				 // if((isset($_POST['8h10h_L'])))
					if((!empty($_POST['8h10h_L']))) 
	//----------------------------------------------------------------------------PLUTARD METTRE çA if((isset($_POST['8h10h_L'])))--------------------------------------
					//COMME çA SI L'UTILISATEUR NE REMPLIS PAS LA CAGE çA SERA CONSIDERER COMME VIDE
					// SI ON NE FAIT PAS çA çA VA GARDER L'ANCIENNE VALEUR DANS LA BASE DE DONNEE 
					{
					   $matiere=$_POST['8h10h_L'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 8h_10h ='".$matiere."' where id=1 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['8h10h_M'])))
					{
					   $matiere=$_POST['8h10h_M'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 8h_10h ='".$matiere."' where id=2 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>
				<td>
				<?php
					if((!empty($_POST['8h10h_Mc'])))
					{
					   $matiere=$_POST['8h10h_Mc'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 8h_10h ='".$matiere."' where id=3 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>

				</td>

				<td>
				<?php
					if((!empty($_POST['8h10h_J'])))
					{
					   $matiere=$_POST['8h10h_J'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 8h_10h ='".$matiere."' where id=4 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['8h10h_V'])))
					{
					   $matiere=$_POST['8h10h_V'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 8h_10h ='".$matiere."' where id=5 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['8h10h_S'])))
					{
					   $matiere=$_POST['8h10h_S'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 8h_10h ='".$matiere."' where id=6 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>
			</tr>
			<tr>
		<!--  ----------------------------------------------------------------		 -->


				<td>10h-12h</td>
				<td>
				<?php
					if((!empty($_POST['10h12h_L'])))
					{
					   $matiere=$_POST['10h12h_L'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 10h_12h ='".$matiere."' where id=1 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['10h12h_M'])))
					{
					   $matiere=$_POST['10h12h_M'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 10h_12h ='".$matiere."' where id=2 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>
				<td>
				<?php
					if((!empty($_POST['10h12h_Mc'])))
					{
					   $matiere=$_POST['10h12h_Mc'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 10h_12h ='".$matiere."' where id=3 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>

				</td>

				<td>
				<?php
					if((!empty($_POST['10h12h_J'])))
					{
					   $matiere=$_POST['10h12h_J'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 10h_12h ='".$matiere."' where id=4 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['10h12h_V'])))
					{
					   $matiere=$_POST['10h12h_V'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 10h_12h ='".$matiere."' where id=5 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['10h12h_S'])))
					{
					   $matiere=$_POST['10h12h_S'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 10h_12h ='".$matiere."' where id=6 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>
			</tr>
		<!--  ----------------------------------------------------------------		 -->

			<tr>
				<td>13h-14h30</td>
				<td>
				<?php
					if((!empty($_POST['13h12h30_L'])))
					{
					   $matiere=$_POST['13h12h30_L'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 13h_14h30 ='".$matiere."' where id=1 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['13h12h30_M'])))
					{
					   $matiere=$_POST['13h12h30_M'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 13h_14h30 ='".$matiere."' where id=2 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>

				</td>

				<td>
				<?php
					if((!empty($_POST['13h12h30_Mc'])))
					{
					   $matiere=$_POST['13h12h30_Mc'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 13h_14h30 ='".$matiere."' where id=3 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['13h12h30_J'])))
					{
					   $matiere=$_POST['13h12h30_J'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 13h_14h30 ='".$matiere."' where id=4");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>	
				</td>
				<td>
				<?php
					if((!empty($_POST['13h12h30_V'])))
					{
					   $matiere=$_POST['13h12h30_V'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 13h_14h30 ='".$matiere."' where id=5 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>	
			</td>
			<td>
				<?php
					if((!empty($_POST['13h12h30_S'])))
					{
					   $matiere=$_POST['13h12h30_S'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 13h_14h30 ='".$matiere."' where id=6");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>			
			</td>
			</tr>
		<!--  ----------------------------------------------------------------		 -->

			<tr>
				<td>14h30-16h</td>
				<td>
				<?php
					if((!empty($_POST['14h30_16h_L'])))
					{
					   $matiere=$_POST['14h30_16h_L'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 14h30_16h ='".$matiere."' where id=1 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>				
				</td>

				<td>
				<?php
					if((!empty($_POST['14h30_16h_M'])))
					{
					   $matiere=$_POST['14h30_16h_M'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 14h30_16h ='".$matiere."' where id=2 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['14h30_16h_Mc'])))
					{
					   $matiere=$_POST['14h30_16h_Mc'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 14h30_16h ='".$matiere."' where id=3 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['14h30_16h_J'])))
					{
					   $matiere=$_POST['14h30_16h_J'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 14h30_16h ='".$matiere."' where id=4 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['14h30_16h_V'])))
					{
					   $matiere=$_POST['14h30_16h_V'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 14h30_16h ='".$matiere."' where id=5 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>
				<td><!-- C'EST SAMEDI <input type="text" name="" placeholder="matiere"> --></td>
			</tr>
			</tr>
		<!--  ----------------------------------------------------------------		 -->

			<tr>
				<td>16h-18h</td>
				<td>
				<?php
					if((!empty($_POST['16h18h_L'])))
					{
					   $matiere=$_POST['16h18h_L'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 16h_18h ='".$matiere."' where id=1 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['16h18h_M'])))
					{
					   $matiere=$_POST['16h18h_M'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 16h_18h ='".$matiere."' where id=2 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['16h18h_Mc'])))
					{
					   $matiere=$_POST['16h18h_Mc'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 16h_18h ='".$matiere."' where id=3 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['16h18h_J'])))
					{
					   $matiere=$_POST['16h18h_J'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 16h_18h ='".$matiere."' where id=4 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>

				<td>
				<?php
					if((!empty($_POST['16h18h_V'])))
					{
					   $matiere=$_POST['16h18h_V'];
				  	   $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 16h_18h ='".$matiere."' where id=5 ");
					   $sql3->execute(); 
					   echo $matiere;
					}
				?>
				</td>
				<td><!-- <input type="text" name="" placeholder="matiere"> --></td>
			</tr>
		</table>
		<input type="submit" name="valider" value="Valider">
		<input type="submit" name="modifier" value="Modifier">

<?php } ?>


</body>
</html>