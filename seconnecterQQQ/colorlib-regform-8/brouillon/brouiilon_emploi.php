<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>emploie du temps</title>
</head>
<body>
	<p>emploie du temps</p>
	 <form action="#" method="">
		<table border="1">
			<?php
				$lines = file('memoire.docx');

				// display file line by line
				foreach($lines as $line_num => $line) { ?>
				    echo "  ".htmlspecialchars($line)."<br />\n";
			
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
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
			</tr>
			<tr>
				<td>10h-12h</td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
			</tr>
			<tr>
				<td>13h-14h30</td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><!-- <input type="text" name="" placeholder="matiere"> --></td>
			</tr>
			<tr>
				<td>14h30-16h</td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><!-- <input type="text" name="" placeholder="matiere"> --></td>
			</tr>
			<tr>
				<td>16h-18h</td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><input type="text" name="" placeholder="matiere"></td>
				<td><!-- <input type="text" name="" placeholder="matiere"> --></td>
			</tr>
		<?php	}
			?>
			
		</table>
		<input type="submit" name="" value="Planifier">
	 </form>

<?php
$lines = file('fichierX.txt');

// display file line by line
foreach($lines as $line_num => $line) {
    echo "  ".htmlspecialchars($line)."<br />\n";
}
?>


</body>
</html>












<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>emploie du temps</title>
</head>
<body>
	<p>emploie du temps</p>
	 <form action="emploiedutemps.php" method="POST">
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
				<?php  $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 8h-10h ='".$8h10h."' AND password ='".$password."'  ");
					   $sql3->execute(); 
				?>
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
		<input type="submit" name="Planifier" value="Planifier">
	 </form>




	 <?php if((!empty($_POST['8h10h']))|(!empty($_POST['10h12h'])) )
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
				<?php  $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
					   $sql3=$conn->prepare("UPDATE emploi_temps_licence1_sf SET 8h-10h ='".$8h10h."' AND password ='".$password."'  ");
					   $sql3->execute(); 
				?>
					<input type="text" name="8h10h" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>
			</tr>
			<tr>
				<td>10h-12h</td>
				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>
			</tr>
			<tr>
				<td>13h-14h30</td>
				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>
				<td><!-- <input type="text" name="" placeholder="matiere"> --></td>
			</tr>
			<tr>
				<td>14h30-16h</td>
				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>
				<td><!-- <input type="text" name="" placeholder="matiere"> --></td>
			</tr>
			</tr>
			<tr>
				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>

				<td><input type="text" name="" placeholder="matiere">
				</td>
				<td><!-- <input type="text" name="" placeholder="matiere"> --></td>
			</tr>
			</tr>
		</table>
		<input type="submit" name="" value="Planifier">






</body>
</html>