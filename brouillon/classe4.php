<?php 
session_start(); ?>
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
    <p>Partie Semestre</p>

<?php 
      echo "Nom de la specialite : ".$_SESSION['nom_specialite'];
      echo"<br>";
      echo "Nom de la section : ".$_SESSION['name_section'];
      echo"<br>";
if(!empty($_SESSION['nom_classe'])){


      echo 'Classe : '.$_SESSION['nom_classe'];
}
      echo"<br>";
      echo"<br>";



for($cpt=1;$cpt<=$_SESSION['df_sp'];$cpt++)
{
    if(!empty($_POST['annee'.$cpt]))
    { 
        $_SESSION['number_classe']=$cpt;
        $_SESSION['nom_classe']=$_POST['annee'.$cpt];
      echo 'Classe : '.$_SESSION['nom_classe'];
      echo"<br>";

      for($o=1;$o<=2;$o++)
        {
        ?>
    <form action="classe.php" method="post">
      <input type="submit" name="semestre<?php echo $o; ?>" value="semestre_<?php echo $o; ?>">
    </form>
  <?php }
    }
}

for($o=1;$o<=2;$o++)
{
    //and &&empty($_SESSION['inconnu']) faire ça çi-dessous.
    if(!empty($_POST['semestre'.$o]))
    {
      $_SESSION['semestre']=$_POST['semestre'.$o];
      $_SESSION['number_semestre']=$o;
      echo $_POST['semestre'.$o];
        ?>
    <form action="classe.php" method="post">
        <label>Entrer le nombre d'unité d'enseignement(UE)</label>
        <input type="number" name="nbr_ue<?php echo $o; ?>" />
        <input type="submit" value="Envoyez"/>
        </p>
    </form>
<?php
    
  
  
  }
}
// for($o=1;$o<=2;$o++)
// {
// if(isset($_POST['nbre_ue']))
// {
//     echo"existe";
//     if(isset($_POST['ue_semestre'.$o ])){
//         echo"eixite2";

//     }

// }
// }

for($e=1;$e<=2;$e++)
{
    if(!empty($_POST['nbr_ue'.$e]))
      {
        $_SESSION['nbr_ue']=$_POST['nbr_ue'.$e];
        // echo $_POST['ue_semestre'.$o];
        echo $_SESSION['semestre'];
        echo"<br>";
        echo"nombre d'UE : ".$_POST['nbr_ue'.$e];

        ?>
  <form action="classe.php" method="post">
        <?php
        for($i=1;$i<=$_POST['nbr_ue'.$e];$i++)
       { 
        ?>
    <br>
        <fieldset>
        <label>Entrer le nom de l'UE</label>
        <input type="text" name="name_ue_<?php echo"$i";?>" required/>
        <label>Entrer le nombre de matieres</label>
        <input type="number" name="nbr_matiere_<?php echo"$i";?>" required/>
        </fieldset>
<?php } ?>
        <input type="submit" name="name_nbr_semestre" value="suivant" />
  </form>

<?php 

    }
  }
?>
<?php 
// $_SESSION['somme_nbr_matiere']=0;
// for($i=1;$i<=$_SESSION['nbr_ue'];$i++){
//   if(!empty($_POST['nbr_matiere_'.$i]))
//   {
//     $_SESSION['somme_nbr_matiere']=$_SESSION['somme_nbr_matiere']+$_POST['nbr_matiere_'.$i];
//   }
// }
?>


<!-- --------------------------------------------------------------- -->
<?php
// if(isset($_POST['modifier_semestre'])){
//   echo"kikiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii".$_SESSION['Nb_Heures_CM_'];
// }

?>

<?php

if(!empty($_POST['name_nbr_semestre']))
{
//Pour empêcher les anciennes variables de sessions se chargaient 
  for($i=1;$i<=$_SESSION['nbr_ue'];$i++)
  {
    if(isset($_SESSION['name_ue'.$i]))
    {
      unset($_SESSION['name_ue'.$i]);
    }

    if(isset($_SESSION['total_cdt_ue_'.$i]))
    {
      unset($_SESSION['total_cdt_ue_'.$i]);
    }

    if(!empty($_SESSION['nbr_matiere'.$i]))
    {
      for($p=1;$p<=$_SESSION['nbr_matiere'.$i];$p++)
      {
        if(isset($_SESSION['Nb_Heures_CM_'.$p.'_'.$i]))
        {
          unset($_SESSION['Nb_Heures_CM_'.$p.'_'.$i]);
        }

        if(isset($_SESSION['Nb_Heures_TD_'.$p.'_'.$i]))
        {
          unset($_SESSION['Nb_Heures_TD_'.$p.'_'.$i]);
        }

        if(isset($_SESSION['Nb_Heures_TP_'.$p.'_'.$i]))
        {
          unset($_SESSION['Nb_Heures_TP_'.$p.'_'.$i]);
        }

        if(isset($_SESSION['Nb_Heures_TPE_'.$p.'_'.$i]))
        {
          unset($_SESSION['Nb_Heures_TPE_'.$p.'_'.$i]);
        }
        
        if(isset($_SESSION['Nb_Heures_total_'.$p.'_'.$i]))
        {
          unset($_SESSION['Nb_Heures_total_'.$p.'_'.$i]);
        }
       
        if(isset($_SESSION['Coef_'.$p.'_'.$i]))
        {
          unset($_SESSION['Coef_'.$p.'_'.$i]);
        }
        
        if(isset($_SESSION['Credit_UE'.$p.'_'.$i]))
        {
          unset($_SESSION['Credit_UE'.$p.'_'.$i]);
        }
        unset($_SESSION['nbr_matiere'.$i]);

      }
    }
  }
}
  ?>










<?php 
if(!empty($_POST['name_nbr_semestre'])||(!empty($_POST['modifier_semestre'])))
{

?>
<form action="classe.php" method="post">
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
        <!-- ----------------------- Pour Semestre X ----------------------------------->
      <tr class="marron">
         <td>
            <?php echo $_SESSION['semestre']; ?>
         </td>
         <td>
          <input disabled placeholder="total heure CM Semestre" type="number" size="15"/>
        </td>
        <td>
          <input disabled placeholder="total heure TD Semestre" type="number" size="15"/>
        </td>
        <td>
          <input disabled placeholder="total heure TP Semestre" type="number" size="15"/>
        </td>
        <td>
          <input disabled placeholder="total heure TPE Semestre" type="number" size="15"/>
        </td>
        <td>
          <input disabled placeholder="Nombre heure total Semestre" type="number" size="15"/>
        </td>
        <td>
          <input disabled type="number" size="15"/>
        </td>
        <td>
          <input disabled placeholder="Total crédit_UE Semestre" type="number" size="15" />
        </td>
    </tr>

<?php

    for($i=1;$i<=$_SESSION['nbr_ue'];$i++)
    {
        if(!empty($_POST['name_ue_'.$i])||(!empty($_SESSION['name_ue'.$i])))
        {
          if(!empty($_POST['name_ue_'.$i]))
          {
            $_SESSION['name_ue'.$i]=$_POST['name_ue_'.$i];
          }
      ?>
<!------------------------------------ Pour Unité d'enseignment ---------------------------->

    <tr class="bleuX">
         <td>
            <?php 
              echo $_SESSION['name_ue'.$i]; 
            ?>
         </td>
         <td>
          <input disabled placeholder="total heure CM" type="number" size="15"/>
        </td>
        <td>
          <input disabled placeholder="total heure TD" type="number" size="15"/>
        </td>
        <td>
          <input disabled placeholder="total heure TP" type="number" size="15"/>
        </td>
        <td>
          <input disabled placeholder="total heure TPE" type="number" size="15"/>
        </td>
        <td>
          <input disabled placeholder="Nombre heure total" type="number" size="15"/>
        </td>
        <td>
          <input disabled type="number" size="15"/>
        </td>
        <td>
          <input required placeholder="Total crédit_UE" name="total_cdt_ue_<?php echo $i;?>"
          value="<?php if(isset($_SESSION['total_cdt_ue_'.$i]))
          {echo $_SESSION['total_cdt_ue_'.$i]; } ?>" size="15"/>
          <!-- type="number" size="15" /> -->
        </td>
    </tr>

    <!----------------------------------- Pour Matiere d'une unité d'enseignment ---------------------------->

  <?php
        if(!empty($_POST['nbr_matiere_'.$i])||(!empty($_SESSION['name_ue'.$i])))
        { 
          if(!empty($_POST['nbr_matiere_'.$i]))
          {
            $_SESSION['nbr_matiere'.$i]=$_POST['nbr_matiere_'.$i];
          }

          for($p=1;$p<=$_SESSION['nbr_matiere'.$i];$p++)
          {
      ?>
      <tr>
      
        <td>
          <input required type="text" name="name_matiere_<?php echo $p."_".$i;?>" 
          value="<?php if(isset($_SESSION['name_matiere_'.$p.'_'.$i]))
          {echo $_SESSION['name_matiere_'.$p.'_'.$i]; } ?>" size="22"/>
        </td>

        <td>
          <input required type="number" name="Nb_Heures_CM_<?php echo $p."_".$i;?>" 
          value="<?php if(isset($_SESSION['Nb_Heures_CM_'.$p.'_'.$i]))
          {echo $_SESSION['Nb_Heures_CM_'.$p.'_'.$i]; } ?>" size="22"/>
        </td>

        <td>
          <input required type="number" name="Nb_Heures_TD_<?php echo $p."_".$i;?>"
          value="<?php if(isset($_SESSION['Nb_Heures_TD_'.$p.'_'.$i]))
          {echo $_SESSION['Nb_Heures_TD_'.$p.'_'.$i]; } ?>" size="22"/>
        </td>

        <td>
          <input required type="number" name="Nb_Heures_TP_<?php echo $p."_".$i;?>" 
          value="<?php if(isset($_SESSION['Nb_Heures_TP_'.$p.'_'.$i]))
          {echo $_SESSION['Nb_Heures_TP_'.$p.'_'.$i]; } ?>" size="22"/>
        </td>

        <td>
          <input required type="number" name="Nb_Heures_TPE_<?php echo $p."_".$i;?>" 
          value="<?php if(isset($_SESSION['Nb_Heures_TPE_'.$p.'_'.$i]))
          {echo $_SESSION['Nb_Heures_TPE_'.$p.'_'.$i]; } ?>" size="22"/>
        </td>

        <td>
          <input required type="number" name="Nb_Heures_total_<?php echo $p."_".$i;?>" 
          value="<?php if(isset($_SESSION['Nb_Heures_total_'.$p.'_'.$i]))
          {echo $_SESSION['Nb_Heures_total_'.$p.'_'.$i]; } ?>" size="22"/>
        </td>
        
        <td>
          <input required type="number" name="Coef_<?php echo $p."_".$i;?>" 
          value="<?php if(isset($_SESSION['Coef_'.$p.'_'.$i]))
          {echo $_SESSION['Coef_'.$p.'_'.$i]; } ?>" size="22"/>
        </td>
        
        <td>
          <input disabled type="number" name="Credit_UE<?php echo $p."_".$i;?>" 
                >
        </td> 

      </tr>
    <?php
          }
        }
      ?>

    <!-- </tr> -->
<?php
    }
  }
?>
  </table>
  <input type="submit" name="submit_table" value="valider les données"/>
</form>

<?php
 }

?>





<!-- --------------------------------- APRES SUBMIT TABLE --------------------------------------->



<?php 

if(!empty($_POST['submit_table']))
{

  for($i=1;$i<=$_SESSION['nbr_ue'];$i++)
  {  
    // if(!empty($_SESSION['nbr_matiere'.$i]))
    // {
    //   $nbr_matiere=$_SESSION['nbr_matiere'.$i];
    
    // for($j=1;$j<=$nbr_matiere;$j++)
    // {
    
          // echo "le nombre de matiere : ".$_SESSION['nbr_matiere'.$i]; 
          echo"<br>";
        $_SESSION['som_CM'.$i]=0;
        $_SESSION['som_TD'.$i]=0;
        $_SESSION['som_TP'.$i]=0;
        $_SESSION['som_TPE'.$i]=0;
        $_SESSION['som_Total'.$i]=0;
        // $_SESSION['som_coef'.$i]=0;
        $_SESSION['som_credit_ue']=0;
    //   }
    // }
  }

// ----------------------------Deb-----------------------
//   for($i=1;$i<=$_SESSION['nbr_ue'];$i++)
//   {  

              echo"<br>";
        $_SESSION['som_sm_CM']=0;
        $_SESSION['som_sm_TD']=0;
        $_SESSION['som_sm_TP']=0;
        $_SESSION['som_sm_TPE']=0;
        $_SESSION['som_sm_Total']=0;
        // $_SESSION['som_coef'.$i]=0;
        $_SESSION['som_sm_credit_ue']=0;
//   }
// ---------------------------fin-----------------------

//   if((!empty($_POST['Nb_Heures_CM_'.$y.'_'.$i]))&&(!empty($_POST['Nb_Heures_TD_'.$y.'_'.$i]))
//   &&(!empty($_POST['Nb_Heures_TP_'.$y.'_'.$i]))&&(!empty($_POST['Nb_Heures_TPE_'.$y.'_'.$i]))
//   &&(!empty($_POST['Nb_Heures_total_'.$y.'_'.$i])))


// if((isset($_POST['Nb_Heures_CM_'.$y.'_'.$i]))&&(isset($_POST['Nb_Heures_TD_'.$y.'_'.$i]))
// &&(isset($_POST['Nb_Heures_TP_'.$y.'_'.$i]))&&(isset($_POST['Nb_Heures_TPE_'.$y.'_'.$i]))
// &&(isset($_POST['Nb_Heures_total_'.$y.'_'.$i])))

  for($i=1;$i<=$_SESSION['nbr_ue'];$i++)
  {
    if((!empty($_SESSION['nbr_matiere'.$i]))&&(!empty($_SESSION['name_ue'.$i])))
    {
      $nbr_matiere=$_SESSION['nbr_matiere'.$i];
    
      for($y=1;$y<=$_SESSION['nbr_matiere'.$i];$y++)
      {
        // echo "le nombre de matiere : ".$_SESSION['nbr_matiere'.$i]; 
        // echo"<br>";

        if(((!empty($_POST['Nb_Heures_CM_'.$y.'_'.$i])||($_POST['Nb_Heures_CM_'.$y.'_'.$i])==0))&&
        (!empty($_POST['Nb_Heures_TD_'.$y.'_'.$i])||($_POST['Nb_Heures_TD_'.$y.'_'.$i])==0)
        &&(!empty($_POST['Nb_Heures_TP_'.$y.'_'.$i])||($_POST['Nb_Heures_TP_'.$y.'_'.$i])==0)
        &&(!empty($_POST['Nb_Heures_TPE_'.$y.'_'.$i])||($_POST['Nb_Heures_TPE_'.$y.'_'.$i])==0)
        &&(!empty($_POST['Nb_Heures_total_'.$y.'_'.$i]))||($_POST['Nb_Heures_total_'.$y.'_'.$i])==0)
      {

         
          $_SESSION['Nb_Heures_CM_'.$y.'_'.$i]=$_POST['Nb_Heures_CM_'.$y.'_'.$i];
          $_SESSION['Nb_Heures_TD_'.$y.'_'.$i]=$_POST['Nb_Heures_TD_'.$y.'_'.$i];
          $_SESSION['Nb_Heures_TP_'.$y.'_'.$i]=$_POST['Nb_Heures_TP_'.$y.'_'.$i];
          $_SESSION['Nb_Heures_TPE_'.$y.'_'.$i]=$_POST['Nb_Heures_TPE_'.$y.'_'.$i];
          $_SESSION['Nb_Heures_total_'.$y.'_'.$i]=$_POST['Nb_Heures_total_'.$y.'_'.$i];
          $_SESSION['Coef_'.$y.'_'.$i]=$_POST['Coef_'.$y.'_'.$i];
          $_SESSION['name_matiere_'.$y.'_'.$i]=$_POST['name_matiere_'.$y.'_'.$i];



          // $_SESSION['Nb_Heures_CM_']=$_SESSION['Nb_Heures_CM_'.$y.'_'.$i];



          $_SESSION['som_CM'.$i]=$_SESSION['som_CM'.$i]+$_POST['Nb_Heures_CM_'.$y.'_'.$i];
          $_SESSION['som_TD'.$i]=$_SESSION['som_TD'.$i]+$_POST['Nb_Heures_TD_'.$y.'_'.$i];
          $_SESSION['som_TP'.$i]=$_SESSION['som_TP'.$i]+$_POST['Nb_Heures_TP_'.$y.'_'.$i];
          $_SESSION['som_TPE'.$i]=$_SESSION['som_TPE'.$i]+$_POST['Nb_Heures_TPE_'.$y.'_'.$i];
          $_SESSION['som_Total'.$i]=$_SESSION['som_Total'.$i]+$_POST['Nb_Heures_total_'.$y.'_'.$i];



          echo"<br>";
          echo"dollar SESSION['post_CM'dollar_y]  Nb_Heures_CM : ".$_POST['Nb_Heures_CM_'.$y.'_'.$i];
          echo"<br>";

        }


      }

      
    }
    if((!empty($_SESSION['name_ue'.$i]))&&(!empty($_POST['total_cdt_ue_'.$i])))
    {
        $_SESSION['total_cdt_ue_'.$i]=$_POST['total_cdt_ue_'.$i];
        $_SESSION['som_credit_ue']=$_SESSION['som_credit_ue']+$_POST['total_cdt_ue_'.$i];

    }

  }
  for($i=1;$i<=$_SESSION['nbr_ue'];$i++)
  {
    if(!empty($_SESSION['name_ue'.$i]))
    {
    
      // for($o=1;$o<=$_SESSION['name_ue'.$i];$o++)
      // {
        echo "Pour UE : ".$_SESSION['name_ue'.$i]." : ";
        echo"<br>";

        echo "total CM : ".$_SESSION['som_CM'.$i];
        echo"<br>";

        echo " total TD : ".$_SESSION['som_TD'.$i];
        echo"<br>";

        echo " total TP : ".$_SESSION['som_TP'.$i];
        echo"<br>";
        

        echo "total TPE : ".$_SESSION['som_TPE'.$i];
        echo"<br>";
        
        echo "Nombre heure total : ".$_SESSION['som_Total'.$i];
        echo"<br>";
        
        echo"<br>";

      $_SESSION['som_sm_CM']=$_SESSION['som_sm_CM']+$_SESSION['som_CM'.$i];
      $_SESSION['som_sm_TD']=$_SESSION['som_sm_TD']+$_SESSION['som_TD'.$i];
      $_SESSION['som_sm_TP']=$_SESSION['som_sm_TP']+$_SESSION['som_TP'.$i];
      $_SESSION['som_sm_TPE']=$_SESSION['som_sm_TPE']+$_SESSION['som_TPE'.$i];
      $_SESSION['som_sm_Total']=$_SESSION['som_sm_Total']+$_SESSION['som_Total'.$i];
      // $_SESSION['som_coef'.$i]=0;



    }
  }
  echo"<br>";
  echo"<br>";

  echo"<br>";
  echo"<br>";
// echo $_SESSION['name_ue'.$i];
  echo "Dollar post som_credit_ue total est de : ".$_SESSION['som_credit_ue'];

  $_SESSION['som_sm_credit_ue']=$_SESSION['som_credit_ue'];






?>
<form action="classe.php" method="post">
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
    <!-------------------------------- Pour Semestre X -------------------------------------->
        </tr>
      <tr class="marron">
         <td>
            <?php echo $_SESSION['semestre']; ?>
         </td>
         <td>
            <?php 
                echo $_SESSION['som_sm_CM'];
            ?>
          <!-- <input disabled placeholder="total heure CM Semestre" type="number" size="15"/> -->
        </td>
        <td>
            <?php 
                echo $_SESSION['som_sm_TD'];
            ?> 
          <!-- <input disabled placeholder="total heure TD Semestre" type="number" size="15"/> -->
        </td>
        <td>
            <?php 
                echo $_SESSION['som_sm_TP'];
            ?> 
        
          <!-- <input disabled placeholder="total heure TP Semestre" type="number" size="15"/> -->
        </td>
        <td>
            <?php 
                echo $_SESSION['som_sm_TPE'];
            ?>         
          <!-- <input disabled placeholder="total heure TPE Semestre" type="number" size="15"/> -->
        </td>
        <td>
            <?php 
                echo $_SESSION['som_sm_Total'];
            ?> 
          <!-- <input disabled placeholder="Nombre heure total Semestre" type="number" size="15"/> -->
        </td>
        <td>
          <input disabled type="number" size="15"/>
        </td>
        <td>
            <?php 
                echo $_SESSION['som_sm_credit_ue'];
            ?> 
          <!-- <input disabled placeholder="Total crédit_UE Semestre" type="number" size="15" /> -->
        </td>
    </tr>
    <!---------------------------------- Pour UE X -------------------------------------->

<?php

    for($i=1;$i<=$_SESSION['nbr_ue'];$i++)
    {
        if(!empty($_SESSION['name_ue'.$i]))
        { 
          // $_SESSION['name_ue'.$i]=$_POST['name_ue_'.$i];
      ?>
    <tr class="bleuX">
         <td>
            <?php echo'UE : '.$_SESSION['name_ue'.$i]; ?>
        
         </td>
         <td>
            <?php 
    echo $_SESSION['som_CM'.$i]; ?>
          </td>
          <td>
              <?php 
    echo $_SESSION['som_TD'.$i]; ?>
          </td>  
          <td>
              <?php
    echo $_SESSION['som_TP'.$i]; ?>
          </td>
          <td>
              <?php 
    echo $_SESSION['som_TPE'.$i]; ?>
          </td>
          <td>
              <?php
    echo $_SESSION['som_Total'.$i]; ?>
          </td>
          <td>
              <input disabled type="number" size="15"/>
          </td>
          <td>

              <?php
      echo $_POST['total_cdt_ue_'.$i]; ?>
          </td>
    </tr>
  <?php
        if(!empty($_SESSION['nbr_matiere'.$i]))
        { 
        //   $_SESSION['nbr_matiere'.$i]=$_POST['nbr_matiere_'.$i];

          for($o=1;$o<=$_SESSION['nbr_matiere'.$i];$o++)
          {
      ?>

     <!---------------------------------- Pour Matiere X -------------------------------------->

      <tr>
        
        <td>
            <?php 
              echo $_POST['name_matiere_'.$o.'_'.$i];
            ?>
        </td>
        <td>
            <?php 
              echo $_POST['Nb_Heures_CM_'.$o.'_'.$i];
            ?>
        </td>
        <td>
            <?php 
              echo $_POST['Nb_Heures_TD_'.$o.'_'.$i];
            ?>
        </td>
        <td>
            <?php 
              echo $_POST['Nb_Heures_TP_'.$o.'_'.$i];
            ?>      
        </td>
        <td>
            <?php 
              echo $_POST['Nb_Heures_TPE_'.$o.'_'.$i];
            ?>          
        </td>
        <td>
            <?php 
              echo $_POST['Nb_Heures_total_'.$o.'_'.$i];
            ?> 
        </td>
        <td>
            <?php 
              echo $_POST['Coef_'.$o.'_'.$i];
            ?> 
        </td>
        <td>
            <?php 
            //   echo $_POST['Credit_UE_'.$o.'_'.$i];
            ?> 
        </td>

      </tr>
    <?php
          }
        }
      ?>

    <!-- </tr> -->
<?php
    }
  }
?>
  </table>
  <input type="submit" name="valider_semestre" value="valider le semestre"/>
<input type="submit" name="modifier_semestre" value="modifier le semestre"/>
</form>

<?php
 }
?>
<!-- --------------------------------- APRES clique sur valider_semestre --------------------------------------->


<?php 
if(!empty($_POST['valider_semestre']))
  {
    // $_SESSION['number_semestre']=1;
    echo"CouCou";

  //   $semestre_number=$_SESSION['number_semestre'];
  //   // $name_classe=$_SESSION['nom_classe'];
  //   $classe_number=$_SESSION['number_classe'];
  //   $nom_specialite=$_SESSION['nom_specialite'];
  //   $name_section=$_SESSION['name_section'];
  //   $name_section="CAP";
  //   echo"<br>";
  //   echo $semestre_number;
  //   echo"<br>";

  //     //  $sql = "create TABLE semestre_".$semestre_number."_annnee".$number_classe."_".$nom_specialite."_".$name_section."(
  //       // Pour selectionner ce genre de table, on écrit:  select * from semestre_$nom_variable_boucle...etc
  //   try
	//     {
  //   $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
	// 	$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
  // $sql= "create TABLE semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_section."(
	// 	id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //   Unite_Enseignement varchar(100) NULL,
  //   matiere varchar(240) NULL,
  //   Nb_Heures_CM int(100) default 0,
  //   Nb_Heures_TD int(100) default 0,
  //   Nb_Heures_TP int(100) default 0,
  //   Nb_Heures_TPE int(100) default 0,
  //   Nb_Heures_Total int(100) default 0,
  //   coef int(100) default 0,
  //   est_programmer varchar(240) NULL,
  //   quantum_horraire int(100) default 0,
  //   quantum_horraire_cours int(100) default 0,
  //   professeur varchar(100) NULL,
  //   semestre int(100) default 0
  //   )";
	//   $conn2->exec($sql);
	// }catch(PDOException $e)
	// 	 {
 	// 	  echo "Erreur quelques part: " . $e->getMessage();
	//   }
  
  // echo"CouCou";
  // // $sql= "create TABLE semestre_".$semestre_number."_annnee_".$classe_number."_".$nom_specialite."_".$name_section."(
  //   $_SESSION['number_semestre']=1;



  //   for($i=1;$i<=$_SESSION['nbr_ue'];$i++)
  //   {
  //   if(!empty($_SESSION['nbr_matiere'.$i]))
  //     { 
  //       // echo  
  //       echo'UE : '.$_SESSION['name_ue'.$i]; 
  //       for($o=1;$o<=$_SESSION['nbr_matiere'.$i];$o++)
  //       {
  //         $conn=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
  //         $sql = "INSERT INTO semestre_$ (nom_section, nbr_specialite_section) VALUES (?,?)";
  //         $stmt= $conn->prepare($sql);
  //         $stmt->execute([$nom_section, $nbr_specialite]);
  //       }
  //     } 
  //   }
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
