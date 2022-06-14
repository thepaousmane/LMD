<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>licence 2 sage femme</title>
</head>
<body>
	<p>licence 2 Sage Femme</p>
	<?php  
		if(isset($_GET['licence2SF']))
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