<?php 
session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>directeur</title>
		<script type="text/javascript">
	history.pushState(null, null, "<?php //echo $_SERVER["REQUEST_URI"]; ?>");
	window.addEventListener("popstate", function(event) {
	window.location.assign("http://localhost/UPA/index-mp-layout1.php");
	});
</script> 
<!-- <link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144"> -->


<!-- Stylesheet -->
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
	<!-- <a href="#"><input type="submit" name="se_deconnecter" value="Se Déconnecter"></a> -->
<?php 
// isset — Détermine si une variable est déclarée et est différente de null
// empty() - Détermine si une variable est vide
// if (isset($_POST['email']) &&  isset($_POST['password'])) 

// if(empty($_POST['email']))
// {
// 	echo'email existe pas</br>';
// }else{
// 	echo'email existe  </br>';
// }
//route('toto.php');
//route('jnvk')

//Function header(){
//   return(
// <div>
//   <h1>
//     Bégué
//   </h1>
// </div>
//   )
// }

if((!empty($_POST['email']))&&(!empty($_POST['password'])))
{
	$email=$_POST['email'];
	$var_email='momathiam@gmail.com';
	// 
	// 
	$var_mdp=$_POST['password'];
	$mdp='momathiam123';
		if(($email==$var_email)&&($mdp==$var_mdp))
		{
			echo'email et mdp correcte';
			// echo $_POST['email'];
		}else{
			echo'email ou mdp incorrecte';
			echo'</br>';
					// echo $_POST['email'];
		}
} if((!empty($_POST['email']))&&(empty($_POST['password']))){
	echo'vieullez remplir le mdp';
}
 if((empty($_POST['email']))&&(!empty($_POST['password']))){
	echo"vieullez remplir l'email";
}
 if((empty($_POST['email']))&&(empty($_POST['password']))){
	echo'veuillez remplir le formulaire';
}
?>
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


   <li class="active"><a href="#home">Se Déconnecter</a>

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
<!-- <p>c'est le directeur</p> -->

<?php
  // $str = "Réseaux";
  // $replaced1 = str_replace(' ', '_', $str);
  // $replaced2 = str_replace("'", "_", $replaced1);
  // echo"<br>";
  // echo $replaced2;
  // echo"<br>";
?>




<?php
// Pour supprimer une section et une specialité 
if(!empty($_POST['delete_section']))
{
  $nom_section=$_SESSION['name_section'];

  $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
  $sql=$conn2->prepare("DELETE from section WHERE nom_section='".$nom_section."'");
  $sql->execute();

  $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
  $sql=$conn2->prepare("DELETE from specialite_section WHERE nom_section='".$nom_section."'");
  $sql->execute();
}
   


// Pour supprimer une spéciliaté donnée
if(!empty($_POST['delete_specialite']))
{
  $nom_specialite=$_SESSION['nom_specialite'];

  $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
  $sql=$conn2->prepare("DELETE from specialite_section WHERE nom_specialite='".$nom_specialite."'");
  $sql->execute();
}

?>

<!--//////////////////////--Si valider_departement existe--////////////////////////////////////////////////////////////////-->

<?php
if(!empty($_POST['valider_departement'])){
  echo"coucoucoucou";
  $nom_departement_colonne=$_SESSION['nom_Departement'];
  $nom_departement_table_transf=$_SESSION['nom_Departement'];
  $nbr_specialite_d=$_SESSION['nbr_specialite_D'];

    // $str = "Welcom to WayToLearnX d'aptitude";
    $replaced1 = str_replace(' ', '_', $nom_departement_table_transf);
    $nom_departement_table = str_replace("'", "_", $replaced1);
    echo"<br>";
    echo $nom_departement_table;
    $_SESSION['nom_departement_table']=$nom_departement_table;
    echo"<br>";

    $pass='';   
    $connX = new PDO(
      "mysql:host=127.0.0.1;dbname=upa","root",$pass, 
      array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
      )
    );

    // $connX=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
    $sqlX = "INSERT INTO departement (nom_departement, nom_departement_table, nbr_specialite_departement) VALUES (?,?,?)";
    $stmtX= $connX->prepare($sqlX);
    $stmtX->execute([$nom_departement_colonne, $nom_departement_table, $nbr_specialite_d]);



  for($i=1;$i<=$_SESSION['nbr_specialite_D'];$i++)
  {
    // $nom_section=$_SESSION['nom_section'];
    $nom_speciality_D_colonne=$_POST['specialite_D_'.$i];
    $nom_speciality_D_table_transf=$_POST['specialite_D_'.$i];
    $duree_formation_speciality_D=$_POST['duree_formation_D_'.$i];

    $replaced1 = str_replace(' ', '_', $nom_speciality_D_table_transf);
    $nom_speciality_D_table = str_replace("'", "_", $replaced1);
    echo"<br>";
    echo $nom_speciality_D_table;
    $_SESSION['nom_speciality_D_table']=$nom_speciality_D_table;
    echo"<br>";

    $pass='';   
    $connX = new PDO(
      "mysql:host=127.0.0.1;dbname=upa","root",$pass, 
      array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
      )
    );


    // $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
    $sql2 = "INSERT INTO specialite_departement (nom_specialite, nom_departement, duree_formation_specialite_D) VALUES (?,?,?)";
    $stmt2= $connX->prepare($sql2);
    $stmt2->execute([$nom_speciality_D_colonne, $nom_departement_colonne, $duree_formation_speciality_D]);
  }


  try
  {
    $conn4=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
    $conn4->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql4= "create TABLE IF NOT EXISTS compte_professeur_departement_".$nom_departement_table."(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom varchar(100) NULL,
    prenom varchar(100) NULL,
    adresse varchar(240) NULL,
    date_de_naissance varchar(240) NULL,
    tel int(100) default 0,
    email varchar(100) NULL,
    password varchar(100) NULL
  )";
    $conn4->exec($sql4);
  }catch(PDOException $e)
  {
    echo "Erreur quelques part: " . $e->getMessage();
  }

}

  ?>
  <!-- <a href="departement\upaSante\filiere\indexFiliereSante.php"> <input type="submit" name="UPAS" value="<?php 
  // echo "$nom_departement";?>"></a> -->

  <?php


$conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
$sql3=$conn->prepare("SELECT * FROM departement");
$sql3->execute(); 
// $data=$sql3->fetch();
// echo $data["nom_section"]; 
 while($row = $sql3->fetch(PDO::FETCH_ASSOC)) 
 { 
  $nom_departement=$row['nom_departement'];
  $id=$row['id'];
 ?>
    <?php 
    // echo htmlspecialchars($row['nom_section']); ?>
    <form action="indexFiliere.php" method="post">
      <!-- <button name="nom_section<?php 
      // echo $id; ?>" value="<?php 
      // echo $nom_section; ?>"></button> -->
    <input type="submit" name="nom_departement<?php echo $id; ?>" value="<?php echo $nom_departement; ?>">
    <!-- <input type="submit" name="<?php //echo htmlspecialchars($nom_section); ?>" value="<?php //echo htmlspecialchars($row['nom_section']); ?>"> -->
    </form>

<?php } ?>
<!--//////////////////////--Si valider_section existe--////////////////////////////////////////////////////////////////-->
<br>
<br>
<?php
if(!empty($_POST['valider_section'])){
    $nom_section=$_SESSION['nom_section'];
    $nbr_specialite=$_SESSION['nbr_specialite'];

    $conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
    $sql = "INSERT INTO section (nom_section, nbr_specialite_section) VALUES (?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$nom_section, $nbr_specialite]);


  for($i=1;$i<=$_SESSION['nbr_specialite'];$i++)
  {
    // $nom_section=$_SESSION['nom_section'];
    $nom_speciality=$_POST['specialite_'.$i];
    $duree_formation_speciality=$_POST['duree_formation_'.$i];

    $conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
    $sql = "INSERT INTO specialite_section (nom_specialite, nom_section, duree_formation_specialite) VALUES (?,?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$nom_speciality, $nom_section, $duree_formation_speciality]);
  }
  ?>
  <a href="departement\upaSante\filiere\indexFiliereSante.php"> <input type="submit" name="UPAS" value="<?php echo "$nom_section";?>"></a>

  <?php
}

$conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
$sql3=$conn->prepare("SELECT * FROM section");
$sql3->execute(); 
// $data=$sql3->fetch();
// echo $data["nom_section"]; 
 while($row = $sql3->fetch(PDO::FETCH_ASSOC)) 
 { 
  $nom_section=$row['nom_section'];
  $id=$row['id'];
 ?>
    <?php 
    // echo htmlspecialchars($row['nom_section']); ?>
    <form action="indexFiliere.php" method="post">
      <!-- <button name="nom_section<?php 
      // echo $id; ?>" value="<?php 
      // echo $nom_section; ?>"></button> -->
    <input type="submit" name="nom_section<?php echo $id; ?>" value="<?php echo $nom_section; ?>">
    <!-- <input type="submit" name="<?php //echo htmlspecialchars($nom_section); ?>" value="<?php //echo htmlspecialchars($row['nom_section']); ?>"> -->
    </form>


<?php } ?>




<p> Bienvenue  Directeur</p>

<!-- <a href="departement\upaSante\filiere\indexFiliereSante.php"> <input type="submit" name="UPAS" value="$nom_section"></a> -->
<!-- <a href="departement\upaTech\indexFiliereTechnique.php"><input type="submit" name="UPAG" value="UPAT"></a>
<input type="submit" name="UPAT" value="UPAG"> -->
<a href="departement\upaSante\filiere\indexFiliereSante.php"> <input type="submit" name="UPAS" value="UPAS"></a>



<a href="departement\upaSante\filiere\creerDepartement.php"><input type="submit" name="create_departement" value="CREER DEPARTEMENT"></a>
<p>Creer :</p>
<form action="departement\upaSante\filiere\creerDepartement.php" method="post">
    <div>
      <input type="radio" id="section" name="section" value="section">
      <label for="section">une section(exp : CAP, BT, BTS,...)</label>
    </div>
    <div>
      <input type="radio" id="departement" name="departement" value="depart">
      <label for="departement">un Département(exp : Informtique, Sante, Biologie...)</label>
    </div>
  <input type="submit"/>
</form>


<!-- -------------------FOOTER-----------------------------------------FOOTER-----------------------------------------------------FOOTER---------------------------- -->

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
</body>
</html>