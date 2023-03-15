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
<link href="css/gestion_semestre.css" rel="stylesheet"/>




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

  <!--/////////////////////////////// premiere affichage : Depuis la page niveau.php///////////////////////////////// -->

<?php 


for($i=1;$i<=$_SESSION['df_sp_D'];$i++)
{
  if(!empty($_POST['annee'.$i]))
  {
    $_SESSION['nom_classe_D']=$_POST['annee'.$i]; 
    $_SESSION['number_classe_D']=$i;
  }
}
$nom_specialite=$_SESSION['nom_specialite_D'];
$name_departement=$_SESSION['name_departement'];
echo"spécialité : ".$_SESSION['nom_specialite_D'];
echo"<br>";
echo"Département : ".$_SESSION['name_departement'];
echo"<br>";
if(!empty($_SESSION['nom_classe_D'])){
echo"classe : ".$_SESSION['nom_classe_D'];
echo"<br>";


$nom_specialite_transf=$_SESSION['nom_specialite_D'];
$name_departement_transf=$_SESSION['name_departement'];
// $name_section="cap";

$replaced1 = str_replace(' ', '_', $nom_specialite_transf);
$nom_specialite = str_replace("'", "_", $replaced1);

$replaced2 = str_replace(' ', '_', $name_departement_transf);
$name_departement = str_replace("'", "_", $replaced2);

}

for($i=1;$i<=$_SESSION['df_sp_D'];$i++)
{
  if(!empty($_POST['annee'.$i]))
  {
    $cpt_RP=0;
      //si on fait echo $_SESSION['nom_classe'] ça va afficher : genre ==> annee_1
    for($j=1;$j<=2;$j++)
    {
      $toto=0;
      $_SESSION['classe_number_RP']=$classe_number=$i;
      $_SESSION['semestre_number_RP']=$semestre_number=$j;
      echo"<br>";
      echo"semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement;
      echo"<br>";
 
      // echo"dollar classe number : i ".$classe_number." dollar semestre number j : ".$semestre_number;
      $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
      $sql=$conn2->prepare("SELECT * from semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
        ");
      $sql->execute();
      while($row = $sql->fetch(PDO::FETCH_ASSOC)) 
      { 
        $toto=$toto+1;
      }
      if($toto>=1)
      {
        $cpt_RP++;
      }  
    }
if($cpt_RP==2)
{
  // for($j=1;$j<=2;$j++)
  // {
    $toto6=0;
    $classe_number=$i;
    // $semestre_number=$j;
    // echo"dollar classe number : i ".$classe_number." dollar semestre number j : ".$semestre_number;
    $conn6=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
    $sql6=$conn6->prepare("SELECT * from RP_classe_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
      ");
    $sql6->execute();
    // $nbr=$sql->fetchColumn();

          // $data2=$sql->fetch();
    while($row6 = $sql6->fetch(PDO::FETCH_ASSOC)) 
    { 
      $toto6=$toto6+1;
    }
    if($toto6<=0)
    {
      try
      {
        $conn4=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
        $conn4->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql4= "create TABLE IF NOT EXISTS RP_classe_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nom varchar(100) NULL,
        prenom varchar(100) NULL,
        classe varchar(100) NULL,
        email varchar(100) NULL,
        tel int(100) default 0
      )";
        $conn4->exec($sql4);
      }catch(PDOException $e)
      {
        echo "Erreur quelques part: " . $e->getMessage();
      }
    ?>
      <form method="get" action="responsable_pedagogique.php">	
          <label>Choisir le Responsable Pédagique</label>
            <select type="select" name="selectX" multiple size="4">
      <?php 
        $conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
        $sql3=$conn->prepare("SELECT nom, prenom, email from professeur");
        $sql3->execute();
        $data=$sql3->fetchALL();
        foreach ($data as $dataX)
        {
          ?>  
          <option value="<?php echo $dataX['prenom'].' '.$dataX['nom'].' '.$dataX['email']; ?>"><?php echo $dataX['prenom'].' '.$dataX['nom']; ?></option> 
      <?php
        }
          ?>
        </select>
          <input type="submit" name="envoyerX" value="Envoyer">
	  </form>
<?php
    }
    else if($toto6>=1)
    {
      $conn3=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
      $sql3=$conn3->prepare("SELECT * from RP_classe_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
        ");
      $sql3->execute();
      $data3=$sql3->fetch();
      $nom=$data3['nom'];
      $prenom=$data3['prenom'];
      echo "Responsable Pédagogique : Mr/Mm ".$prenom." ".$nom;
      echo"<br>";
      //echo changer de responsable pedagogique
      ?>
      	<form method="get" action="responsable_pedagogique.php">	
				<input type="submit" name="selectY" value="Changer de Responsable Pédagogique">
			</form>
    <?php  
    }

  // }

}

  }
}





for($i=1;$i<=$_SESSION['df_sp_D'];$i++)
{
  if(!empty($_POST['annee'.$i]))
  {
    $cpt_RP=0;
    $_SESSION['nom_classe_D']=$_POST['annee'.$i];       //si on fait echo $_SESSION['nom_classe'] ça va afficher : genre ==> annee_1
    for($j=1;$j<=2;$j++)
    {
      $toto=0;
      $classe_number=$i;
      $semestre_number=$j;
      // echo"dollar classe number : i ".$classe_number." dollar semestre number j : ".$semestre_number;
      $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
      $sql=$conn2->prepare("SELECT * from semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
        ");
      $sql->execute();
      // $nbr=$sql->fetchColumn();


            // $data2=$sql->fetch();
      while($row = $sql->fetch(PDO::FETCH_ASSOC)) 
      { 
        $toto=$toto+1;
      // }
      // }
      // echo"cccccccccccccccccccccccccccccccccccccccc";
      // echo"<br>";
      // echo"<br>";
      // echo "semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_section."existe";
      // echo"<br>";      echo"<br>";
      
      }

      // echo count($data2);



      if($toto>=1)
      {

        // echo"<br>";
        // echo "semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_section."existe";
        // echo"<br>";
        ?>













<!-------------------------------------------------- Affichage de la table --------------------------------------------------->
      <?php 
            $Nb_Heures_CM=0;
            $Nb_Heures_TD=0;
            $Nb_Heures_TP=0;
            $Nb_Heures_TPE=0;
            $Nb_Heures_Total=0;
            $credit_ue=0;

            $conn4=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
            $sql4=$conn4->prepare("SELECT * from ue_semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
              ");
            $sql4->execute();
            while($data2=$sql4->fetch()) 
            {
              $semestre=$data2['semestre'];
              $Nb_Heures_CM=$Nb_Heures_CM+$data2['Nb_Heures_CM'];
              $Nb_Heures_TD=$Nb_Heures_TD+$data2['Nb_Heures_TD'];
              $Nb_Heures_TP=$Nb_Heures_TP+$data2['Nb_Heures_TP'];
              $Nb_Heures_TPE=$Nb_Heures_TPE+$data2['Nb_Heures_TPE'];
              $Nb_Heures_Total=$Nb_Heures_Total+$data2['Nb_Heures_Total'];
              $credit_ue=$credit_ue+$data2['credit_ue'];       
            }
      ?>
<!-- <form action="creer_classeXXX.php" method="post"> -->
    <table border="1">
      <tr>
          <th>Matieres</th>
          <th>Nb Heures CM</th>
          <th>Nb Heures TD</th>
          <th>Nb Heures TP</th>
          <th>Nb Heures TPE</th>
          <th>Nb Heures Total</th>
          <th>coef</th>
          <th>Credit UE</th>
    </tr>

    <!-------------------------------- Pour Semestre X -------------------------------------->
        <tr class="marron">
          <td>
            <?php echo"Semestre ".$semestre;?>
         </td>
         <td>
            <?php 
                echo $Nb_Heures_CM;
            ?>
        </td>
        <td>
            <?php 
                echo $Nb_Heures_TD;
            ?> 
        </td>
        <td>
            <?php 
                echo $Nb_Heures_TP;
            ?> 
        </td>
        <td>
            <?php 
                echo $Nb_Heures_TPE;
            ?>         
        </td>
        <td>
            <?php 
                echo $Nb_Heures_Total;
            ?> 
        </td>
        <td>
          <input disabled type="number" size="15"/>
        </td>
        <td>
            <?php 
                echo $credit_ue;
            ?> 
        </td>   
        </tr>
<!-------------------------------- Pour Unité d'enseignement-------------------------------------->
<?php
        $conn3=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
        $sql3=$conn3->prepare("SELECT * from ue_semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
          ");
        $sql3->execute();
        while($data3=$sql3->fetch()) 
        {
    ?>     
        <tr class="bleuX">
          <td>
            <?php echo $data3['Unite_Enseignement']; ?>
         </td>
         <td>
            <?php echo $data3['Nb_Heures_CM']; ?>
          </td>
          <td>
              <?php echo $data3['Nb_Heures_TD']; ?>
          </td>  
          <td>
              <?php echo $data3['Nb_Heures_TP']; ?>
          </td>
          <td>
              <?php echo $data3['Nb_Heures_TPE']; ?>
          </td>
          <td>
              <?php echo $data3['Nb_Heures_Total']; ?>
          </td>
          <td>
              <input disabled type="number" size="15"/>
          </td>
          <td>
            <?php echo $data3['credit_ue']; ?>
          </td>
        </tr>
        <!-- </tr> -->
    <?php
             $Unite_Enseignement_transf=$data3['Unite_Enseignement_transf'];
             // echo"<br>";
             // echo "Unité d'enseignement dh : ".$Unite_Enseignement;
             // echo"<br>";
     
             $conn5=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
             $sql5=$conn5->prepare("SELECT * from semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
              WHERE Unite_Enseignement_transf='".$Unite_Enseignement_transf."' ");

          // id='".$idX."'
        $sql5->execute();
        // $data5=$sql5->fetchAll();
        // echo count($data2);
        // $nbr=$sql5->rowCount();
        // echo" dollar nbr est de : ".$nbr;
        while($data5=$sql5->fetch()) 
        {
    ?>   
        <tr>
          <td>
            <?php echo $data5['matiere']; ?>
         </td>
         <td>
            <?php echo $data5['Nb_Heures_CM']; ?>
          </td>
          <td>
              <?php echo $data5['Nb_Heures_TD']; ?>
          </td>  
          <td>
              <?php echo $data5['Nb_Heures_TP']; ?>
          </td>
          <td>
              <?php echo $data5['Nb_Heures_TPE']; ?>
          </td>
          <td>
              <?php echo $data5['Nb_Heures_Total']; ?>
          </td>
          <td>
              <?php echo $data5['coef']; ?>
          </td>
          <td>
              <input disabled type="number" size="15"/>
          </td>
        </tr>
      <?php
        }
      }
        ?>
    </table>
    <form action="creer_classe_D.php" method="post">
    <!-- <button>Modifier la <input type="submit" name="modifier_semestre" value="semestre"/></p></button> -->

    <input type="submit" name="semestre<?php echo $j; ?>" value=" Modifier le semestre_<?php echo $j; ?>">
  </form>
<!-- </form> -->



  <?php
// break;  
}
else{
  ?>
  <form action="creer_classe_D.php" method="post">
   <input type="submit" name="semestre<?php echo $j; ?>" value="Creer le semestre_<?php echo $j; ?>">
  </form>
<?php
}
echo"<br>";
// echo"<br>";
// echo"<br>";
}
  }
}

?>





<!--//////////////////////////// Deuxieme affichage : Depuis la page creer_classe.php /////////////////////////////////-->

<?php 
if(!empty($_POST['valider_semestre']))
  {
    $name_classe=$_SESSION['nom_classe_D'];


    $semestre_number=$_SESSION['number_semestre_D'];
    $classe_number=$_SESSION['number_classe_D'];
    $nom_specialiteOG=$_SESSION['nom_specialite_D'];
    $name_departementOG=$_SESSION['name_departement'];

    $nom_specialite_transf=$_SESSION['nom_specialite_D'];
    $name_departement_transf=$_SESSION['name_departement'];
    // $name_section="cap";


    $replaced1 = str_replace(' ', '_', $nom_specialite_transf);
    $nom_specialite = str_replace("'", "_", $replaced1);

    $replaced2 = str_replace(' ', '_', $name_departement_transf);
    $name_departement = str_replace("'", "_", $replaced2);
    // echo"<br>";
    // echo $nom_speciality_D_table;
    // $_SESSION['nom_speciality_D_table']=$nom_speciality_D_table;
    // echo"<br>";

echo"<br>";
    echo "semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement." existe";
    echo"<br>";


    $conn=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
    $sql=$conn->prepare("DROP TABLE IF EXISTS semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."");
    $sql->execute();


    $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
    $sql2=$conn2->prepare("DROP TABLE IF EXISTS UE_semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."");
    $sql2->execute();


    try
    {
  $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
  $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
$sql= "create TABLE IF NOT EXISTS semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."(
  id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Unite_Enseignement varchar(100) NULL,
  Unite_Enseignement_transf varchar(100) NULL,
  matiere varchar(240) NULL,
  Nb_Heures_CM int(100) default 0,
  Nb_Heures_TD int(100) default 0,
  Nb_Heures_TP int(100) default 0,
  Nb_Heures_TPE int(100) default 0,
  Nb_Heures_Total int(100) default 0,
  coef int(100) default 0,
  est_programmer varchar(240) NULL,
  quantum_horraire int(100) default 0,
  quantum_horraire_cours int(100) default 0,
  professeur varchar(100) NULL,
  semestre int(100) default 0
  )";
  $conn2->exec($sql);
}catch(PDOException $e)
   {
     echo "Erreur quelques part: " . $e->getMessage();
   }

echo"CouCou";
// $sql= "create TABLE semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_section."(
  $_SESSION['number_semestre_D']=1;
  $toto='toto';

  // $_SESSION['Nb_Heures_CM_'.$y.'_'.$i]=$_POST['Nb_Heures_CM_'.$y.'_'.$i];
  // $_SESSION['Nb_Heures_TD_'.$y.'_'.$i]=$_POST['Nb_Heures_TD_'.$y.'_'.$i];
  // $_SESSION['Nb_Heures_TP_'.$y.'_'.$i]=$_POST['Nb_Heures_TP_'.$y.'_'.$i];
  // $_SESSION['Nb_Heures_TPE_'.$y.'_'.$i]=$_POST['Nb_Heures_TPE_'.$y.'_'.$i];
  // $_SESSION['Nb_Heures_total_'.$y.'_'.$i]=$_POST['Nb_Heures_total_'.$y.'_'.$i];
  // $_SESSION['Coef_'.$y.'_'.$i]=$_POST['Coef_'.$y.'_'.$i];



  try
  {
$conn3=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
$conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $_SESSION['total_cdt_ue_'.$i]
$sql3="create TABLE IF NOT EXISTS ue_semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."(
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Unite_Enseignement varchar(100) NULL,
Unite_Enseignement_transf varchar(100) NULL,
semestre int(100) default 0,
specialite varchar(240) NULL,
section varchar(240) NULL,
annee int(100) default 0,  
Nb_Heures_CM int(100) default 0,
Nb_Heures_TD int(100) default 0,
Nb_Heures_TP int(100) default 0,
Nb_Heures_TPE int(100) default 0,
Nb_Heures_Total int(100) default 0,
credit_ue int(100) default 0
)";
$conn3->exec($sql3);
}catch(PDOException $e)
 {
   echo "Erreur quelques part: " . $e->getMessage();
 }


 $conn4=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
 $sql4=$conn4->prepare("SELECT * from ue_semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
    ");
 $sql4->execute();
 $data4=$sql4->fetchAll();
 $nbr = $sql4->rowCount();
  if($nbr<=0)//----------------------JE PENSE QU'IL FAUT SUPPRIMER CE IF----------------------------------
  {
    for($i=1;$i<=$_SESSION['nbr_ue_D'];$i++)
    {
      if(!empty($_SESSION['name_ue_D'.$i]))
      {
        // for($o=1;$o<=$_SESSION['name_ue'.$i];$o++)
        // {
          $name_ue=$_SESSION['name_ue_D'.$i];
          $name_ue_tranf=$_SESSION['name_ue_D'.$i];
          $name_ue_tranf = str_replace("'", "", $name_ue_tranf);
          // $name_ue = addslashes($name_ue);

          $som_CM=$_SESSION['som_CM_D'.$i];
          $som_TD=$_SESSION['som_TD_D'.$i];
          $som_TP=$_SESSION['som_TP_D'.$i];
          $som_TPE=$_SESSION['som_TPE_D'.$i];
          $som_Total=$_SESSION['som_Total_D'.$i];
          $cdt_ue=$_SESSION['total_cdt_ue__D'.$i];

          $pass='';   
          $conn = new PDO(
            "mysql:host=127.0.0.1;dbname=upa","root",$pass, 
            array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            )
          );

          // $conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
          $sql = "INSERT INTO UE_semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement." 
          (Unite_Enseignement, Unite_Enseignement_transf, semestre, specialite, section, annee, Nb_Heures_CM, Nb_Heures_TD, Nb_Heures_TP, 
          Nb_Heures_TPE, Nb_Heures_Total, credit_ue) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
          $stmt= $conn->prepare($sql);
          $stmt->execute([$name_ue, $name_ue_tranf, $semestre_number, $nom_specialiteOG, $name_departementOG, $classe_number, $som_CM, 
          $som_TD, $som_TP, $som_TPE, $som_Total, $cdt_ue]);
      }
    }
  }



 $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
  $sql=$conn2->prepare("SELECT * from semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
    ");
  $sql->execute();
  $data2=$sql->fetchAll();
  // echo count($data2);
  $nbr = $sql->rowCount();
  if($nbr<=0)//----------------------JE PENSE QU'IL FAUT SUPPRIMER CE IF----------------------------------
  {

    for($i=1;$i<=$_SESSION['nbr_ue_D'];$i++)
    {
    if(!empty($_SESSION['nbr_matiere_D'.$i]))
      { 
        echo'UE : '.$_SESSION['name_ue_D'.$i]; 
        $name_ue=$_SESSION['name_ue_D'.$i]; 
        // $name_ue = addslashes($name_ue);
        $name_ue_tranf=$_SESSION['name_ue_D'.$i];
        $name_ue_tranf = str_replace("'", "", $name_ue_tranf);

        for($y=1;$y<=$_SESSION['nbr_matiere_D'.$i];$y++)
        {
          $name_matiere=$_SESSION['name_matiere__D'.$y.'_'.$i];
          $Nb_Heures_CM=$_SESSION['Nb_Heures_CM__D'.$y.'_'.$i];
          $Nb_Heures_TD=$_SESSION['Nb_Heures_TD__D'.$y.'_'.$i];
          $Nb_Heures_TP=$_SESSION['Nb_Heures_TP__D'.$y.'_'.$i];
          $Nb_Heures_TPE=$_SESSION['Nb_Heures_TPE__D'.$y.'_'.$i];
          $Nb_Heures_total=$_SESSION['Nb_Heures_total__D'.$y.'_'.$i];
          $Coef=$_SESSION['Coef__D'.$y.'_'.$i];



          $pass='';   
          $conn = new PDO(
            "mysql:host=127.0.0.1;dbname=upa","root",$pass, 
            array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            )
          );

          // $conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
          $sql = "INSERT INTO semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement." 
          (Unite_Enseignement, Unite_Enseignement_transf, matiere, Nb_Heures_CM, Nb_Heures_TD, Nb_Heures_TP, 
          Nb_Heures_TPE, Nb_Heures_Total, coef) VALUES (?,?,?,?,?,?,?,?,?)";
          $stmt= $conn->prepare($sql);
          $stmt->execute([$name_ue, $name_ue_tranf, $name_matiere, $Nb_Heures_CM, 
          $Nb_Heures_TD, $Nb_Heures_TP, $Nb_Heures_TPE, $Nb_Heures_total, $Coef]);
        }
      } 
    }
  }

//<!---------------------------------- Affichage du tableau de semestre sinon de "Creer le semestre_" -------------------------------------->

    for($j=1;$j<=2;$j++)
    {
      $toto=0;
      // $classe_number=$i;
      $semestre_number=$j;
      // echo"dollar classe number : i ".$classe_number." dollar semestre number j : ".$semestre_number;
      $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
      $sql=$conn2->prepare("SELECT * from semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
        ");
      $sql->execute();
      // $nbr=$sql->fetchColumn();


            // $data2=$sql->fetch();
      while($row = $sql->fetch(PDO::FETCH_ASSOC)) 
      { 
        $toto=$toto+1;
      // }
      // }
      // echo"cccccccccccccccccccccccccccccccccccccccc";
      // echo"<br>";
      // echo"<br>";
      // echo "semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_section."existe";
      // echo"<br>";      echo"<br>";
      
      }

      // echo count($data2);



      if($toto>=1)
      {

        // echo"<br>";
        // echo "semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_section."existe";
        // echo"<br>";
        ?>
<!-------------------------------------------------- Affichage du tableau --------------------------------------------------->
      <?php 
            $Nb_Heures_CM=0;
            $Nb_Heures_TD=0;
            $Nb_Heures_TP=0;
            $Nb_Heures_TPE=0;
            $Nb_Heures_Total=0;
            $credit_ue=0;

            $conn4=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
            $sql4=$conn4->prepare("SELECT * from ue_semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
              ");
            $sql4->execute();
            while($data2=$sql4->fetch()) 
            {
              $semestre=$data2['semestre'];
              $Nb_Heures_CM=$Nb_Heures_CM+$data2['Nb_Heures_CM'];
              $Nb_Heures_TD=$Nb_Heures_TD+$data2['Nb_Heures_TD'];
              $Nb_Heures_TP=$Nb_Heures_TP+$data2['Nb_Heures_TP'];
              $Nb_Heures_TPE=$Nb_Heures_TPE+$data2['Nb_Heures_TPE'];
              $Nb_Heures_Total=$Nb_Heures_Total+$data2['Nb_Heures_Total'];
              $credit_ue=$credit_ue+$data2['credit_ue'];       
            }
      ?>
<!-- <form action="creer_classeXXX.php" method="post"> -->
    <table border="1">
      <tr>
          <th>Matieres</th>
          <th>Nb Heures CM</th>
          <th>Nb Heures TD</th>
          <th>Nb Heures TP</th>
          <th>Nb Heures TPE</th>
          <th>Nb Heures Total</th>
          <th>coef</th>
          <th>Credit UE</th>
    </tr>

    <!-------------------------------- Pour Semestre X -------------------------------------->
        <tr class="marron">
          <td>
            <?php echo"Semestre ".$semestre;?>
         </td>
         <td>
            <?php 
                echo $Nb_Heures_CM;
            ?>
        </td>
        <td>
            <?php 
                echo $Nb_Heures_TD;
            ?> 
        </td>
        <td>
            <?php 
                echo $Nb_Heures_TP;
            ?> 
        </td>
        <td>
            <?php 
                echo $Nb_Heures_TPE;
            ?>         
        </td>
        <td>
            <?php 
                echo $Nb_Heures_Total;
            ?> 
        </td>
        <td>
          <input disabled type="number" size="15"/>
        </td>
        <td>
            <?php 
                echo $credit_ue;
            ?> 
        </td>   
        </tr>
<!-------------------------------- Pour Unité d'enseignement-------------------------------------->
<?php
        $conn3=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
        $sql3=$conn3->prepare("SELECT * from ue_semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
          ");
        $sql3->execute();
        while($data3=$sql3->fetch()) 
        {
    ?>     
        <tr class="bleuX">
          <td>
            <?php echo $data3['Unite_Enseignement']; ?>
         </td>
         <td>
            <?php echo $data3['Nb_Heures_CM']; ?>
          </td>
          <td>
              <?php echo $data3['Nb_Heures_TD']; ?>
          </td>  
          <td>
              <?php echo $data3['Nb_Heures_TP']; ?>
          </td>
          <td>
              <?php echo $data3['Nb_Heures_TPE']; ?>
          </td>
          <td>
              <?php echo $data3['Nb_Heures_Total']; ?>
          </td>
          <td>
              <input disabled type="number" size="15"/>
          </td>
          <td>
            <?php echo $data3['credit_ue']; ?>
          </td>
        </tr>
        <!-- </tr> -->
    <?php
        $Unite_Enseignement_transf=$data3['Unite_Enseignement_transf'];
        // echo"<br>";
        // echo "Unité d'enseignement dh : ".$Unite_Enseignement;
        // echo"<br>";



        $conn5=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
        $sql5=$conn5->prepare("SELECT * from semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_departement."
         WHERE Unite_Enseignement_transf='".$Unite_Enseignement_transf."' ");
          // id='".$idX."'
        $sql5->execute();
        // $data5=$sql5->fetchAll();
        // echo count($data2);
        // $nbr=$sql5->rowCount();
        // echo" dollar nbr est de : ".$nbr;
        while($data5=$sql5->fetch()) 
        {
    ?>   
        <tr>
          <td>
            <?php echo $data5['matiere']; ?>
         </td>
         <td>
            <?php echo $data5['Nb_Heures_CM']; ?>
          </td>
          <td>
              <?php echo $data5['Nb_Heures_TD']; ?>
          </td>  
          <td>
              <?php echo $data5['Nb_Heures_TP']; ?>
          </td>
          <td>
              <?php echo $data5['Nb_Heures_TPE']; ?>
          </td>
          <td>
              <?php echo $data5['Nb_Heures_Total']; ?>
          </td>
          <td>
              <?php echo $data5['coef']; ?>
          </td>
          <td>
              <input disabled type="number" size="15"/>
          </td>
        </tr>
      <?php
        }
      }
        ?>
    </table>
    <form action="creer_classe_D.php" method="post">
     <input type="submit" name="semestre<?php echo $j; ?>" value="Modifier la semestre_<?php echo $j; ?>">
  </form>
<!-- </form> -->



  <?php
// break;  
}
else{
  ?>
  <form action="creer_classe_D.php" method="post">
     <input type="submit" name="semestre<?php echo $j; ?>" value="Creer le semestre_<?php echo $j; ?>">
  </form>
<?php
}
echo"<br>";
// echo"<br>";
// echo"<br>";
}


  }
?>




















    
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
  <!-- -------------FIN------FOOTER------------------------FIN-----------------FOOTER-----------------------------FIN------------------------FOOTER------------------FIN---------- -->

</body>
</html>