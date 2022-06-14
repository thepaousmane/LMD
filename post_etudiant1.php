<?php session_start();?>
<?php ?>
<!DOCTYPE html>
<html>
  <body>
	<meta charset ='utf-8' />
	<link rel="stylesheet" href="css_etudiant1.css" />
 		<h3><u> Plateforme De Gestion d'Etudiant</u></h3>
		<?php if(isset($_POST['nbr']))
		{ 
			$_SESSION['nbr']=$_POST['nbr'];
			?>	
		<div id="conteneurlivrai">
			<form action="post_etudiant1.php" method="POST">
				<fieldset>
						renseigner la classe <input type="text" placeholder="classe">
					<legend align="center">Gestion D'étudiant</legend>
						<?php
								$_SESSION['i']=1;
								for($_SESSION['i']=1;$_SESSION['i']<$_POST['nbr'];$_SESSION['i']++)
									{
									?>
									<form>
									  <fieldset>
										<legend> Etudiant <?php echo $_SESSION['i'];?> </legend>
										Nom :<?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?><input type="text" name="nom<?php echo $_SESSION['i']; ?>" required pattern="[0-9a-zA-Z-\.]{2,30}" placeholder="Nom"/></br>
										Prénoms : <input type="text" required placeholder="prenom" name="prenom<?php echo $_SESSION['i']; ?>" /></br>
										Note :<?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?><input type="number" min="0" max="20" name="note<?php echo $_SESSION['i']; ?>" required placeholder="note" /></br>
									  </fieldset>
									</form>
								<?php } ?>
						<?php } ?>
						<div class ="ajustsubmit">
							<input style="font-size: 21px; text-shadow: 100px 200px 100px #2F2E33;" name="envoyerX" type="submit" value="Envoyer"/>
						</div>
				</fieldset>
			</form>
		</div>
		<?php 
		$p='111';
				echo $_POST['nbr']+$p;
				echo"<br>";
				echo $_POST['nbr'];
					if(isset($_POST['envoyerX']))
					{
						// for($_SESSION['o']=1;$_SESSION['o']<$_SESSION['nbr'];$_SESSION['o']++)
						// 	{

						// 	}
					}

		?>
	</body>
</html>			