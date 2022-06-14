<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <!--------------------------------------------------------- le directeur -------------------------------------------------------------------->
     <?php
        if(isset($_GET['dir']))
        {                    

            echo '</br>';
    
        try
            {
                $conn1=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
               // $conn = new PDO("mysql:host=$servername;dbname=bddtest", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo 'Connexion directeur réussie';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e)
            {
              echo "Erreur connexion direcrteur non reussi: " . $e->getMessage();
            }

        ?>
<section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
        <div class="signup-content">
                    <form action="directeur.php" method="POST" id="signup-form" class="signup-form">
                    <h2 class="form-title">Connexion</h2>

                    <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" required/>
                    </div>
                    <div class="form-group">
                         <input type="text" class="form-input" name="password" id="password" placeholder="Mot de passe" required/>
                         <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="valider"/>
                    </div>

            </div>
            </div>
    </section>
        <!--------------------------------------------------------- le professeur ----------------------------------------------------------------->


                <?php      
                }
                else if (isset(($_GET['prof'])))
                {
                    try
                    {
                        $conn2=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
                        $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        // echo 'connexion professeur reussion';
                    }catch(PDOException $e)
                    {
                        // echo "Erreur connexion non reussi: " . $e->getMessage();
                        echo"Erreur connexion professeur non reussion".$e->getMessage();

                    }


             ?>
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                 

                    <form action="professeur.php" method="GET" id="signup-form" class="signup-form">
                        <h2 class="form-title">Connexion</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Mot de passe" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                         <a href="#" class="loginhere-link">changer de mot de passe</a>
                    </p>
                </div>
            </div>
        </section>
            <!--------------------------------------------------------- RESPONSABLE DE CLASSE ----------------------------------------------------------------->



                <?php      
                }
                else if(isset(($_GET['etu']))) {

                     try
                    {
                        $conn3=new PDO("mysql:host=127.0.0.1;dbname=upa","root");
                        $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        // echo 'connexion etudiant reussion';
                    }catch(PDOException $e)
                    {
                        // echo "Erreur connexion non reussi: " . $e->getMessage();
                        echo"Erreur connexion etudiant non reussion".$e->getMessage();

                    }
             ?>

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                 

                    <form action="resp_classe.php" method="GET" id="signup-form" class="signup-form">
                        <h2 class="form-title">Connexion</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Mot de passe" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                         <a href="#" class="loginhere-link">changer de mot de passe</a>
                    </p>
                </div>
            </div>
        </section>
    <?php } ?>



    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>