<?php
 session_start(); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index Filiere sante</title>
	<script type="text/javascript">
	// history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
	// window.addEventListener("popstate", function(event) {
	// window.location.assign("http://localhost/UPA/directeur.php");
	// });
</script> 
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
</head>	
<body>
	<!---------------------HEADER-----------------------------------------HEADER-----------------------------------------------------HEADER------------------------------------->
<!-- echo '<html>'; UTILISATION SYMPHONY-->
  <header id="header" class="header">
    <div class="header-top bg-theme-color-2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">123-456-789</a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to 2:00 </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#">contact@yourdomain.com</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget no-border m-0">
              <ul class="list-inline text-right sm-text-center">
                <li>
                  <a href="#" class="text-white">FAQ</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="#" class="text-white">Help Desk</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a href="#" class="text-white">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">




              <!-- <img src="images/logo-wide.png" alt=""> -->
              <img src="" alt="UPA">



              
            </a>
            <ul class="menuzord-menu">
              <li class="activeXXX"><a href="#home">Home</a>
                <ul class="dropdown">
                  <li><a href="#">Multi Page Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-mp-layout1.html">Layout1</a></li>
                      <li><a href="index-mp-layout2.html">Layout2</a></li>
                      <li><a href="index-mp-layout3.html">Layout3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Single Page Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-sp-layout1.html">Layout1</a></li>
                      <li><a href="index-sp-layout2.html">Layout2</a></li>
                      <li><a href="index-sp-layout3.html">Layout3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Boxed Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-boxed-mp-layout1.html">Boxed Multi Page Layout1</a></li>
                      <li><a href="index-boxed-mp-layout2.html">Boxed Multi Page Layout2</a></li>
                      <li><a href="index-boxed-mp-layout3.html">Boxed Multi Page Layout3</a></li>
                      <li><a href="index-boxed-sp-layout1.html">Boxed Single Page Layout1</a></li>
                      <li><a href="index-boxed-sp-layout2.html">Boxed Single Page Layout2</a></li>
                      <li><a href="index-boxed-sp-layout3.html">Boxed Single Page Layout3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">RTL Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-rtl-mp-layout1.html">RTL Multi Page Layout1</a></li>
                      <li><a href="index-rtl-mp-layout2.html">RTL Multi Page Layout2</a></li>
                      <li><a href="index-rtl-mp-layout3.html">RTL Multi Page Layout3</a></li>
                      <li><a href="index-rtl-sp-layout1.html">RTL Single Page Layout1</a></li>
                      <li><a href="index-rtl-sp-layout2.html">RTL Single Page Layout2</a></li>
                      <li><a href="index-rtl-sp-layout3.html">RTL Single Page Layout3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Dark Layouts</a>
                    <ul class="dropdown">
                      <li><a href="index-dark-mp-layout1.html">Dark Multi Page Layout1</a></li>
                      <li><a href="index-dark-mp-layout2.html">Dark Multi Page Layout2</a></li>
                      <li><a href="index-dark-mp-layout3.html">Dark Multi Page Layout3</a></li>
                      <li><a href="index-dark-sp-layout1.html">Dark Single Page Layout1</a></li>
                      <li><a href="index-dark-sp-layout2.html">Dark Single Page Layout2</a></li>
                      <li><a href="index-dark-sp-layout3.html">Dark Single Page Layout3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Magazine Home Layouts <span class="label label-info">New</span></a>
                    <ul class="dropdown">
                      <li><a href="index-magazine-home-layout1.html">Magazine Home layout1</a></li>
                      <li><a href="index-magazine-home-layout2.html">Magazine Home layout1</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Portfolio Home Layouts <span class="label label-info">New</span></a>
                    <ul class="dropdown">
                      <li><a href="index-hot-portfolio-presentation-layout1.html">Portfolio Presentation Layout1</a></li>
                      <li><a href="index-hot-portfolio-presentation-layout2.html">Portfolio Presentation Layout2</a></li>
                      <li><a href="index-hot-portfolio-presentation-layout3.html">Portfolio Presentation Layout3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Hot Layouts <span class="label label-info">New</span></a>
                    <ul class="dropdown">
                      <li><a href="index-hot-split-slider-home.html">Split Slider Home Layout</a></li>
                      <li><a href="index-hot-vertical-slider-home.html">Vertical Slider Home Layout</a></li>
                      <li><a href="index-hot-fullscreen-home.html">Fullscreen Home Layout</a></li>
                      <li><a href="index-hot-parallax-home.html">Parallax Home Layout</a></li>
                      <li><a href="index-hot-personal-home.html">Personal Home Layout</a></li>
                    </ul>
                  </li>
                  <li><a href="index-hot-shop-home.html">Shop Home <span class="label label-info">New</span></a></li>
                  <li><a href="#">Home Variations <span class="label label-info">New</span></a>
                    <ul class="dropdown">
                      <li><a href="#">Rev Slider</a>
                        <ul class="dropdown">
                          <li><a href="index-home-variation-revslider-style1.html">Layout1</a></li>
                          <li><a href="index-home-variation-revslider-style2.html">Layout2</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Maximage Slider</a>
                        <ul class="dropdown">
                          <li><a href="index-home-variation-maximageslider-style1.html">Layout1</a></li>
                          <li><a href="index-home-variation-maximageslider-style2.html">Layout2</a></li>
                          <li><a href="index-home-variation-maximageslider-style3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-home-variation-owl-carousel.html">Owl Slider</a></li>
                      <li><a href="index-home-variation-typed-text.html">Typed Text Layout</a></li>
                      <li><a href="index-home-variation-video-background.html">Youtube Background Video</a></li>
                      <li><a href="index-home-variation-html5-video.html">Html5 Background Video</a></li>
                      <li><a href="index-home-variation-bg-image-parallax.html">Bg Image Parallax Layout</a></li>
                      <li><a href="index-home-variation-bg-static.html">Bg Static Layout</a></li>
                      <li><a href="#">Home Appointment Form</a>
                        <ul class="dropdown">
                          <li><a href="index-home-variation-appointment-form-style1.html">Layout1</a></li>
                          <li><a href="index-home-variation-appointment-form-style2.html">Layout2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>





              <li><a href="#home">Courses</a>
                <ul class="dropdown">
                  <li><a href="page-course-gird.html">Course Gird</a></li>
                  <li><a href="page-course-list.html">Course List</a></li>
                  <li><a href="page-courses-accounting-technologies.html">Accounting Technoloiges</a></li>
                  <li><a href="page-courses-chemical-engineering.html">Chemical Engineering</a></li>
                  <li><a href="page-courses-computer-technologies.html">Computer Technologies</a></li>
                  <li><a href="page-courses-development-studies.html">Development Studies</a></li>
                  <li><a href="page-courses-electrical-electronic.html">Electrical & Electronic</a></li>
                  <li><a href="page-courses-modern-languages.html">Modern Languages</a></li>
                  <li><a href="page-courses-modern-technologies.html">Modern Technologies</a></li>
                  <li><a href="page-courses-software-engineering.html">Software Engineering</a></li>
                </ul>
              </li>
              <li><a href="#home">Teachers</a>
                <ul class="dropdown">
                  <li><a href="page-teachers-style1.html">Teachers style 1</a></li>
                  <li><a href="page-teachers-style2.html">Teachers style 2</a></li>
                  <li><a href="page-teachers-details.html">Teachers Details</a></li>
                </ul>
              </li>


   <li class="active"><a href="#home">Se connecter</a>

               <ul class="dropdown">
                  <li><a href="seconnecter\colorlib-regform-8\index.php?dir=valeur1">Directeur</a>
                  </li>  
                  <li><a href="seconnecter\colorlib-regform-8\index.php?prof=valeur2">Professeur</a>
                  </li>
                  <li><a href="seconnecter\colorlib-regform-8\index.php?etu=valeur3">Etudiant</a>
                  </li>
              </ul>
     </li>

            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
<!----------------FIN-----HEADER---------------------------FIN--------------HEADER---------------------------FIN--------------------------HEADER------------------------------------->
<?php 
 echo"Département : ".$_SESSION['name_departement']; 
 $name_departement=$_SESSION['name_departement'];
if(!empty($_POST['gestion_professeur']))
{ ?>
<form action="gestion_professeur.php" method="post">
<p>Gestion des professeur</p>
<?php echo"Département : ".$_SESSION['name_departement']; 
$_SESSION['name_departement_transf']=$_SESSION['name_departement'];

$replaced1 = str_replace(' ', '_', $_SESSION['name_departement_transf']);
$_SESSION['name_departement_transf'] = str_replace("'", "_", $replaced1);

?>
<label>Entrer le nom de domaine du département
    (exemple : @esp.sn)
</label>
<input type="text" name="nom_domaine" placeholder="@esp.sn" required/><br>
<label>Entrer l'effectif des professeurs du département
</label>
<input type="number" name="effectif_profs" required/><br>
<input type="submit" name="submit" value="Suivant"/>
</form>
<?php 

// for($i=1;$i<=$_SESSION['effectif_profs'];$i++)
// {
//   if(isset($_SESSION['nom_domaine']))
//   {
//     unset($_SESSION['nom_domaine']);
//   }

//   if(isset($_SESSION['nom_'.$i]))
//   {
//     unset($_SESSION['nom_'.$i]);
//   }

//   if(isset($_SESSION['prenom_'.$i]))
//   {
//     unset($_SESSION['prenom_'.$i]);
//   }

//   if(isset($_SESSION['tel_'.$i]))
//   {
//     unset($_SESSION['tel_'.$i]);
//   }

//   if(isset($_SESSION['date_naiss_'.$i]))
//   {
//     unset($_SESSION['date_naiss_'.$i]);
//   }

//   if(isset($_SESSION['adresse_'.$i]))
//   {
//     unset($_SESSION['adresse_'.$i]);
//   }

//   if(isset($_SESSION['email'.$i]))
//   {
//     unset($_SESSION['email'.$i]);
//   }  
  
//   if(isset($_SESSION['password'.$i]))
//   {
//     unset($_SESSION['password'.$i]);
//   }
// }




}


$name_departement=$_SESSION['name_departement_transf'];
?>


<?php
if(!empty($_POST['effectif_profs'])){
$_SESSION['effectif_profs']=$_POST['effectif_profs'];
  $_SESSION['nom_domaine']=$_POST['nom_domaine'];
}
if((!empty($_POST['effectif_profs']))||(!empty($_POST['Modifier_donnee'])))
{
  
?>
<form action="gestion_professeur.php" method="post">
<?php
  // $_SESSION['effectif_profs']=$_POST['effectif_profs'];
  // $_SESSION['nom_domaine']=$_POST['nom_domaine'];

  for($i=1;$i<=$_SESSION['effectif_profs'];$i++)
  {
?>
<fieldset>
<label>Nom <?php echo $i; ?></label>
<input type="text" name="nom_<?php echo "$i"; ?>" required 
value="<?php if(!empty($_SESSION['nom_'.$i])){echo $_SESSION['nom_'.$i];} ?>"
/>
<label>Prènom<?php echo $i; ?></label>
<input type="text" name="prenom_<?php echo "$i"; ?>" required 
value="<?php if(!empty($_SESSION['prenom_'.$i])){echo $_SESSION['prenom_'.$i];} ?>"
/>
<label>Téléphone<?php echo "$i"; ?></label>
<input type="text" name="tel_<?php echo "$i"; ?>" 
value="<?php if(!empty($_SESSION['tel_'.$i])){echo $_SESSION['tel_'.$i];} ?>"
/>

<label>Date de naissance<?php echo "$i"; ?></label>
<input type="date" name="date_naiss_<?php echo "$i"; ?>" min="1950-01-01" max="2010-12-31" 
value="<?php if(!empty($_SESSION['date_naiss_'.$i])){echo $_SESSION['date_naiss_'.$i];} ?>"
/>
<!-- <span class="validity"></span> -->
<label>Adresse<?php echo "$i"; ?></label>
<input type="text" name="adresse_<?php echo "$i"; ?>"
value="<?php if(!empty($_SESSION['adresse_'.$i])){echo $_SESSION['adresse_'.$i];} ?>"
/>
</fieldset>
<?php 
 }
?>
<input type="submit" name="submit2" value="Suivant"/>
</form>
<!------------------------------------A supprimer car mis dans traitement_gestion_professeur.php------------------------------------------------------------------------------------------------------------------>

<?php
}


function fctRetirerAccents($varMaChaine)
{
  $search  = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ');
  //Préférez str_replace à strtr car strtr travaille directement sur les octets, ce qui pose problème en UTF-8
  $replace = array('A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y');

  $varMaChaine = str_replace($search, $replace, $varMaChaine);
  return $varMaChaine; //On retourne le résultat
}
// eventuellement vous pouvez remodifiez directement sur ces camps puis validez 
//<br> ou bien vous pouvez validez directement

?>
<!-- ||(!empty($_POST['Modifier_donnee'])) -->
<?php
if((!empty($_POST['submit2'])))
{
  // $varMachaine = "Et voici une suite de caractères avec accents : ÀÁÂÃÄÅ Ç ÈÉÊË ÌÍÎÏ ÒÓÔÕÖ ÙÚÛÜ Ý àáâãäå ç èéêë ìíîï ðòóôõö ùúûü ýÿ";
	// $varMachaine="kÉkÉ@";	
  // echo "Ma chaîne sans modification : ".$varMachaine."<br />\n";		
	// 	echo "Ma chaîne avec modification : ".fctRetirerAccents($varMachaine)."<br />\n";

?>
<form action="gestion_professeur.php" method="post" >
<table border="1">
  <tr>
<th>Nom</th>
<th>Prénom</th>
<th>Tél</th>
<th>date de naissance</th>
<th>Adresse domicile</th>
<th>Adresse mail</th>
<th>Password</th>
  </tr>
<?php  

for($i=1;$i<=$_SESSION['effectif_profs'];$i++)
  {
    // echo $_SESSION['effectif_profs'];

    // if((!empty($_POST['nom_'.$i]))&&(!empty($_POST['prenom_'.$i])))
    if((!empty($_POST['nom_'.$i]))&&(!empty($_POST['prenom_'.$i]))&&(!empty($_POST['tel_'.$i]))
    &&(!empty($_POST['date_naiss_'.$i]))&&(!empty($_POST['adresse_'.$i]))
    &&(!empty($_SESSION['email'.$i]))&&(!empty($_SESSION['password'.$i]))
    )
    {

      $_SESSION['tel_'.$i]=$_POST['tel_'.$i];
      $_SESSION['date_naiss_'.$i]=$_POST['date_naiss_'.$i];
      $_SESSION['adresse_'.$i]=$_POST['adresse_'.$i];
      $_SESSION['nom_'.$i]=$_POST['nom_'.$i];
      $_SESSION['prenom_'.$i]=$_POST['prenom_'.$i];      
      

      $format_nom=$_POST['nom_'.$i];
      $format_prenom=$_POST['prenom_'.$i];
      $format_nom=mb_strtoupper($format_nom);
      $format_prenom = ucwords(strtolower($format_prenom));
      // $_SESSION['format_nom'.$i]=$format_nom;
      // $_SESSION['format_prenom'.$i]=$format_prenom;

      // echo"haha";
      // echo $_POST['prenom_'.$i].$_POST['nom_'.$i];
      $email=$_POST['prenom_'.$i].'.'.$_POST['nom_'.$i].$i.$_SESSION['nom_domaine'];
      $replaced2 = str_replace(' ', '', $email);
      $email = str_replace("'", '', $replaced2);


      $email=fctRetirerAccents($email);
      $email = mb_strtolower($email);
      $_SESSION['email'.$i]=$email;

    }
   $password="professeur".$_SESSION['nom_domaine']."2023#!";
   $_SESSION['password'.$i]=$password;
?>
<tr>
  <td><input disabled type="text" 
   value="<?php if(!empty($_POST['nom_'.$i])){ echo $format_nom; } ?>"/></td>

  <td><input disabled type="text" 
   value="<?php if(!empty($_POST['prenom_'.$i])){ echo $format_prenom; } ?>"/></td>

  <td><input disabled type="text" 
   value="<?php if(!empty($_POST['tel_'.$i])){ echo $_POST['tel_'.$i]; } ?>"/></td>

  <td><input disabled type="date" 
   value="<?php if(!empty($_POST['date_naiss_'.$i])){ echo $_POST['date_naiss_'.$i]; } ?>"/></td>

  <td><input disabled type="text" 
   value="<?php if(!empty($_POST['adresse_'.$i])){ echo $_POST['adresse_'.$i]; } ?>"/></td>
  
   <td><input disabled type="text" value="<?php echo $_SESSION['email'.$i]; ?>"/></td>
  <td><input disabled type="text" value="<?php echo $_SESSION['password'.$i]; ?>"/></td>
</tr>

<?php 
}
?>

</table>
<input type="submit" name="valider_donnees" value="Valider les données"/>
<input type="submit" name="Modifier_donnee" value="modifier les données"/>

</form>

<?php 
}
?>

<?php 
if(!empty($_POST['valider_donnees']))
{
  for($i=1;$i<=$_SESSION['effectif_profs'];$i++)
  {
    // echo $_SESSION['effectif_profs'];
    if((!empty($_SESSION['format_nom'.$i]))&&(!empty($_SESSION['format_prenom'.$i]))&&(!empty($_SESSION['tel_'.$i]))
    &&(!empty($_SESSION['date_naiss_'.$i]))&&(!empty($_SESSION['adresse_'.$i]))
    &&(!empty($_SESSION['email'.$i]))&&(!empty($_SESSION['password'.$i]))
    )
    {
      $nom=$_SESSION['format_nom'.$i];
      $prenom=$_SESSION['format_prenom'.$i];
      $tel=$_SESSION['tel_'.$i];
      $date_naiss=$_SESSION['date_naiss_'.$i];
      $adresse=$_SESSION['adresse_'.$i];
      $email=$_SESSION['email'.$i];
      $password=$_SESSION['password'.$i];
      
      echo"<br>";
      echo $_SESSION['nom_'.$i];
      echo"<br>";
      echo $_SESSION['prenom_'.$i];
      echo $_SESSION['tel_'.$i];
      echo"<br>";
      echo $_SESSION['date_naiss_'.$i];
      echo $_SESSION['adresse_'.$i];
      echo"<br>";

      try
      {
        $pass='';   
        $connX = new PDO("mysql:host=127.0.0.1;dbname=upa","root",$pass, 
        array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        // $connX=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
        $sql2 = "INSERT INTO compte_professeur_departement_".$name_departement." 
        (nom, prenom, adresse, date_de_naissance, tel, email, password) VALUES (?,?,?,?,?,?,?)";
        $stmt2= $connX->prepare($sql2);
        $stmt2->execute([$nom, $prenom, $adresse, $date_naiss, $tel, $email, $password]);
      }catch(PDOException $e)
      {
        echo "Erreur quelques part: " . $e->getMessage();
      }
    }
  }
}

?>
















<!----------------------FOOTER-----------------------------------------FOOTER-----------------------------------------------------FOOTER---------------------------- -->

<footer id="footer" class="footer bg-black-222" data-bg-img="images/footer-bg.png">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">


            <!-- <img class="mt-10 mb-15" alt="" src="images/logo-wide-white.png"> -->
            <img class="mt-10 mb-15" alt="UPA" src="">



            <p class="font-16 mb-10">GreenPeace is a library of Crowdfunding and Charity templates with predefined elements which helps you to build your own site. Lorem ipsum dolor sit amet consectetur.</p>
            <a class="font-14" href="#"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
            <ul class="styled-icons icon-dark mt-20">
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".4s" data-wow-offset="10"><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus"></i></a></li>
              <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".5s" data-wow-offset="10"><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Latest News</h5>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Donor Privacy Policy</a></li>
              <li><a href="#">Disclaimer</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Media Center</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Contact</h5>
            <ul class="list-border">
              <li><a href="#">+(012) 345 6789</a></li>
              <li><a href="#">hello@yourdomain.com</a></li>
              <li><a href="#" class="lineheight-20">121 King Street, Melbourne Victoria 3000, Australia</a></li>
            </ul>
            <p class="font-16 text-white mb-5 mt-15">Subscribe to our newsletter</p>
            <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
              <label class="display-block" for="mce-EMAIL"></label>
              <div class="input-group">
                <input type="email" value="" name="EMAIL" placeholder="Your Email"  class="form-control" data-height="37px" id="mce-EMAIL">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                </span>
              </div>
            </form>
            
           
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------------FIN------FOOTER------------------------FIN-----------------FOOTER-----------------------------FIN------------------------FOOTER------------------FIN---------- -->

</body>
</html>