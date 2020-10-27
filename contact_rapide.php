<!DOCTYPE html>
<html>
<head>
	<title> Complexe scolaire Vergenard</title>
	<meta charset="utf-8"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/paiement.css"/>
					<!-- code bootstra link css -->

	<script src="https://kit.fontawesome.com/160e690e4e.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">							  
                            <!-- Haute de page -->	 
<header>
	    <div><img src="img/banniere.png"/></div>
</header>
	
                                                        <!-- Formulaire -->
<div id="content">
    <div class="zone1">
       <a href=acceuil.html> Retour</a>
        <br>
                                                    <!-- traitement du formulaire -->
       <?php
            session_start();
            // redaction du code de traitement avec des valeur de sécurité
            $email=$ms="";
               function securisation($données){
                  $données=trim($données);
                  $données=stripslashes($données);
                  $données=strip_tags($données);
                  return $données;
               }
            $email=securisation($_POST['email']);
            $ms=securisation($_POST['ms']);

            // Message de présentation visible par l'utilisateur

            echo 'Votre message à été envoyé avec succès';
           

            // Ouverture d'une insertion à la base de donnée vergenard
          
            $conn=mysqli_connect('localhost','root','','vergenard') or die(mysqli_error());
            $email=$_POST['email'];
            $ms=$_POST['ms'];

            $req="INSERT INTO ms_rapide(email,ms)
             values ('$email','$ms') ";

             $res=mysqli_query($conn,$req);
?>





    </div>

                                					                <!-- Pied de page -->
   
   <div class="footer2">
           <div class="footer-bottom">
               <p>
               Copyright&copy;2020 | Complexe Scolaire Vergenard Tous Droits Réservés |   Par Eveans Jeremy ONIVINONGO EDOU
               </p>
           </div>
   </div>
   
</footer>

        <!-- code JQUERY, Javascript et Popper de boostrap -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        </div>
    </body>
</html>








