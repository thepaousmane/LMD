<?php 
session_start(); ?>
<html>
    <body>

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
  // for($i=1;$i<=3;$i++)
  // {
  //   if(empty($_SESSION['som_CM'.$i])){
  //     echo "COCO";
  //     echo"la variable est de : ".$_SESSION['som_CM'.$i];
  //   }
  // }


//   if((!empty($_POST['Nb_Heures_CM_'.$y.'_'.$i]))&&(!empty($_POST['Nb_Heures_TD_'.$y.'_'.$i]))
//   &&(!empty($_POST['Nb_Heures_TP_'.$y.'_'.$i]))&&(!empty($_POST['Nb_Heures_TPE_'.$y.'_'.$i]))
//   &&(!empty($_POST['Nb_Heures_total_'.$y.'_'.$i])))


// if((isset($_POST['Nb_Heures_CM_'.$y.'_'.$i]))&&(isset($_POST['Nb_Heures_TD_'.$y.'_'.$i]))
// &&(isset($_POST['Nb_Heures_TP_'.$y.'_'.$i]))&&(isset($_POST['Nb_Heures_TPE_'.$y.'_'.$i]))
// &&(isset($_POST['Nb_Heures_total_'.$y.'_'.$i])))


// if(((!empty($_POST['Nb_Heures_CM_'.$y.'_'.$i])||($_POST['Nb_Heures_CM_'.$y.'_'.$i])==0))&&
// (!empty($_POST['Nb_Heures_TD_'.$y.'_'.$i])||($_POST['Nb_Heures_TD_'.$y.'_'.$i])==0)
// &&(!empty($_POST['Nb_Heures_TP_'.$y.'_'.$i])||($_POST['Nb_Heures_TP_'.$y.'_'.$i])==0)
// &&(!empty($_POST['Nb_Heures_TPE_'.$y.'_'.$i])||($_POST['Nb_Heures_TPE_'.$y.'_'.$i])==0)
// &&(!empty($_POST['Nb_Heures_total_'.$y.'_'.$i]))||($_POST['Nb_Heures_total_'.$y.'_'.$i])==0)
// {
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
          // echo"$y.___ les variables Nb_Heures_CM_, Nb_Heures_TD_, Nb_Heures_TD_ , Nb_Heures_total_  et existent";
          // echo"<br>";
          // echo"dollar 'i' : $i";
          // echo"<br>";

        //   echo"<br>";
        //   echo"dollar post Nb_Heures_CM : ".$_POST['Nb_Heures_CM_'.$y.'_'.$i];
        //   echo "dollar y : ".$y;
        //   echo"<br>";



        //   $_POST['Nb_Heures_CM_'.$y.'_'.$i];
        //   $_POST['Nb_Heures_TD_'.$y.'_'.$i];
        //   $_POST['Nb_Heures_TP_'.$y.'_'.$i];
        //   $_POST['Nb_Heures_TPE_'.$y.'_'.$i];
        //   $_POST['Nb_Heures_total_'.$y.'_'.$i];

        //   $_SESSION['post_CM'.$y.'_'.$i]=$_POST['Nb_Heures_CM_'.$y.'_'.$i];
        //   $_SESSION['post_TD'.$y.'_'.$i]=$_POST['Nb_Heures_TD_'.$y.'_'.$i];
        //   $_SESSION['post_TP'.$y.'_'.$i]=$_POST['Nb_Heures_TP_'.$y.'_'.$i];
        //   $_SESSION['post_TPE'.$y.'_'.$i]=$_POST['Nb_Heures_TPE_'.$y.'_'.$i];
        //   $_SESSION['post_Total'.$y.'_'.$i]=$_POST['Nb_Heures_total_'.$y.'_'.$i];


          $_SESSION['som_CM'.$i]=$_SESSION['som_CM'.$i]+$_POST['Nb_Heures_CM_'.$y.'_'.$i];
          $_SESSION['som_TD'.$i]=$_SESSION['som_TD'.$i]+$_POST['Nb_Heures_TD_'.$y.'_'.$i];
          $_SESSION['som_TP'.$i]=$_SESSION['som_TP'.$i]+$_POST['Nb_Heures_TP_'.$y.'_'.$i];
          $_SESSION['som_TPE'.$i]=$_SESSION['som_TPE'.$i]+$_POST['Nb_Heures_TPE_'.$y.'_'.$i];
          $_SESSION['som_Total'.$i]=$_SESSION['som_Total'.$i]+$_POST['Nb_Heures_total_'.$y.'_'.$i];



          // $_SESSION['som_coef'.$i]=$_SESSION['som_coef'.$i]+$_POST['Coef_'.$o];
          echo"<br>";
          echo"dollar SESSION['post_CM'dollar_y]  Nb_Heures_CM : ".$_POST['Nb_Heures_CM_'.$y.'_'.$i];
          echo"<br>";

        //   echo $_SESSION['o']."___ ";
        //   echo"<br>";
        //   echo"dollar 'i' : $i";
        //   echo"<br>";
        //   echo"<br>";
        //   echo $_SESSION['som_CM'.$i];
        //   echo"<br>";

        }
        // else{

        // }

      }

      
    }
    if((!empty($_SESSION['name_ue'.$i]))&&(!empty($_POST['total_cdt_ue_'.$i])))
    {
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
        
        // echo $_SESSION['som_coef'.$i];
        echo"<br>";
      // }
    }
  }
  echo"<br>";
  echo"<br>";

$p=1;
  echo "total CM : ".$_SESSION['som_CM'.$p];
  echo"<br>";
  echo"<br>";

  echo "Dollar post som_credit_ue total est de : ".$_SESSION['som_credit_ue'];










  // $_SESSION['name_nbr_semestre']=$_POST['name_nbr_semestre'];

    // $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
    // $sql=$conn2->prepare("SELECT * from specialite_section");
    $semestre_number=$_SESSION['semestre'];
    // $name_classe=$_SESSION['nom_classe'];
    $number_classe=$_SESSION['number_classe'];
    $nom_specialite=$_SESSION['nom_specialite'];
    $name_section=$_SESSION['name_section'];
       // $sql = "create TABLE semestre_".$semestre_number."_annnee".$number_classe."_".$nom_specialite."_".$name_section."(
        //Pour selectionner ce genre de table, on écrit:  select * from semestre_$nom_variable_boucle...etc
    // try
	// {
    //     $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa;charset=utf8","root");
	// 	$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
    //     $sql = "create TABLE semestre_".$semestre_number."_annnee".$number_classe."_".$nom_specialite."_".$name_section."
    //     (
	// 	id INT(240) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	// 	Unite d enseignement varchar(100) NULL,
	// 	matiere varchar(240) NULL,
    //     Nb_Heures_CM int(100) default 0,
    //     Nb_Heures_TD int(100) default 0,
    //     Nb_Heures_TP int(100) default 0,
    //     Nb_Heures_TPE int(100) default 0,
    //     Nb_Heures_Total int(100) default 0,
    //     coef int(100) default 0,
    //     credit_UE int(100) default 0,
    //     est_programmer varchar(240) NULL,
	// 	quantum_horraire int(100) default 0,
	// 	quantum_horraire_cours int(100) default 0,
	// 	professeur varchar(100) NULL,
	// 	semestre int(100) default 0,
    //     )";
	//   $conn2->exec($sql);
	// }catch(PDOException $e)
	// 	{
 	// 	echo "Erreur : " . $e->getMessage();
	//     }
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
      <tr>
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
        if(!empty($_SESSION['name_ue'.$i]))
        { 
          // $_SESSION['name_ue'.$i]=$_POST['name_ue_'.$i];
      ?>
    <tr>
         <td>
         <font color="#0000FF">
            <?php echo $_SESSION['name_ue'.$i]; ?>
        
         </td>
         </font>
         <td>
         <font color="#0000FF">

            <?php 
    echo $_SESSION['som_CM'.$i]; ?>
          </td>
          </font>
          <td>
          <font color="#0000FF">

              <?php 
    echo $_SESSION['som_TD'.$i]; ?>
          </td>  
          </font>    
          <td>
          <font color="#0000FF">

              <?php
    echo $_SESSION['som_TP'.$i]; ?>
          </td>
          </font>
          <td>
          <font color="#0000FF">

              <?php 
    echo $_SESSION['som_TPE'.$i]; ?>
          </td>
          </font>
          <td>
          <font color="#0000FF">

              <?php
    echo $_SESSION['som_Total'.$i]; ?>
    </font>
          </td>
          <td>
          <font color="#0000FF">

              <?php
    // echo $_SESSION['som_coef'.$i]; ?>
          </td>
          </font>
          <td>
          <font color="#0000FF">

              <?php
      echo $_POST['total_cdt_ue_'.$i]; ?>
          </td>
          </font>
    </tr>
  <?php
        if(!empty($_SESSION['nbr_matiere'.$i]))
        { 
        //   $_SESSION['nbr_matiere'.$i]=$_POST['nbr_matiere_'.$i];

          for($o=1;$o<=$_SESSION['nbr_matiere'.$i];$o++)
          {
      ?>
      <tr>
        
        <td>
            <?php 
              echo $_POST['name_matiere_'.$o.'_'.$i]
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
  <input type="submit" name="submit_semestre" value="valider le semestre"/>
  <input type="submit" name="modifier_semestre" value="modifier le semestre"/>
</form>

<?php
 }
?>







<!-- -------------------- Apres clique sur modifier semestre -------------------------------------- -->
<?php
if(!empty($_POST['modifier_semestre']))
  {
    echo"modifier semestre existe";
    //On affiche tout ce qui vient d'être saisi grâce aux variables de sessions
    //tout en fesant de tel sorte que ça sois modifiable
  }
?>




    </body>
</html>










