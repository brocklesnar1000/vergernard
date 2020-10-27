<!DOCTYPE html>
<html>
<head>
	<title> Complexe scolaire Vergenard</title>
	<meta charset="utf-8"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/traitement.css"/>
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
            $parent=$eleve=$classe=$ville= $adresse=$telephone=$email=$montant=$quittance=$date_paiement="";
               function securisation($données){
                  $données=trim($données);
                  $données=stripcslashes($données);
                  $données=strip_tags($données);
                  return $données;
               }
            $parent=securisation($_POST['parent']);
            $eleve=securisation($_POST['eleve']);
            $classe=securisation($_POST['classe']);
            $ville=securisation($_POST['ville']);
            $adresse=securisation($_POST['adresse']);
            $telephone=securisation($_POST['telephone']);
            $email=securisation($_POST['email']);
            $montant=securisation($_POST['montant']);
            $quittance=securisation($_POST['quittance']);
            $date_paiement=securisation($_POST['date_paiement']);

            // Message de présentation visible par l'utilisateur

            echo 'Votre formulaire a été envoyé avec succès, veuillez à présent nous transmettre une photo lisible de votre
            quittance UBA sur le lien suivant:';
           

            // Ouverture d'une insertion à la base de donnée vergenard
          
            $conn=mysqli_connect('localhost','root','','vergenard') or die(mysqli_error());
            $parent=$_POST['parent'];
            $eleve=$_POST['eleve'];
            $classe=$_POST['classe'];
            $ville=$_POST['ville'];
            $adresse=$_POST['adresse'];
            $telephone=$_POST['telephone'];
            $email=$_POST['email'];
            $montant=$_POST['montant'];
            $quittance=$_POST['quittance'];
            $date_paiement=$_POST['date_paiement'];

            $req="INSERT INTO traitement_contact (parent,eleve,classe,ville,adresse,telephone,email,montant,quittance,date_paiement)
             values ('$parent','$eleve','$classe','$ville','$adresse',$telephone,'$email','$montant','$quittance','$date_paiement') ";

             $res=mysqli_query($conn,$req);
?>
                                                        <!-- email de'envoi -->
<a href="mailto:contact@csvergenard.com?subjet=Ma quittance UBA">contact@csvergenard.com</a>
<br><br><br><br><br><br>
                                                        <!-- message d'indication -->
        <div class= container-warning>
        <h4>!!!IMPORTANT!!!<h4>
        <br>
        <p>
            Veuillez noter que sans la photo de votre quittance UBA, votre paiement ne peut être traité. Il est donc
            impératif de nous la faire parvenir dès l'envoi du formulaire pour procéder aux vérifications.<br>
            Un e-mail de confirmation vous sera envoyer sous 24 à 48 heures, pour vous indiquer que votre paiement à été valider.<br>
            Une fois la quittance envoyée, vous pouvez cliquer le lien de retour ci-haut pour revenir à l'acceuil.
        
        <p>

        </div>


    </div>

                                					        <!-- Pied de page -->
<footer>
    <div class="footer1"> 
                           <div class="container1">              
                                           <div class="footer-section about">
                                               <h2 class="logo-text">Complexe Scolaire<span> Vergenard</span></h2>
                                               <br>
                                               <p>
                                                   Implanté dans le 5 ème Arrondissement de Libreville, le complexe scolaire le Vergenard est situé au quartier Beau-Séjour à 600m 
                                                   entre le carrefour Nialy et le carefour 2 écoles de la circonscription scolaire de Libreville-Sud. N'hésitez
                                                   pas à nous contacter pour toutes demande renseignements.
                                               </p>
                                               <br>
                                               <div class="contact">
                                                   <span><i class="fas fa-phone"></i> &nbsp; +241 77 59 26 01</span>
                                               <span><i class="fas fa-envelope"></i> &nbsp; contact@csvergenard.com</span>
                                               </div>
                                               <div class="socials">
                                                   <a href="https://www.facebook.com/vergenardcomplexescolaire/" target="_blank"><i class="fab fa-facebook fa-1x"></i></a>
                                                   <a href="https://www.instagram.com/vergenard2000/" target="_blank"><i class="fab fa-instagram fa-1x"></i></a>
                                                   <a href="https://twitter.com/vergenard" target="_blank"><i class="fab fa-twitter fa-1x"></i></a>

                                               </div>
                                           </div>
                           </div>
                   

                   
                       <div class="container2">
                               <div class="footer-section links">
                                   <h2>Liens Rapide</h2>
                                   <br>
                                       <ul>
                                           <a href="fichier/REGLEMENT 2019-2020.pdf" target="_blank"><li>Règlement intérieur</li></a>
                                           <a href="fichier/MODALITE.pdf" target="_blank"><li>Modalités d'inscription</li></a>
                                           <a href="fichier/PLAN ECOLE.pdf" target="_blank"><li>Plan de l'école</li></a>
                                       </ul>
                               </div>
                       </div>
                   

                   
                       <div class="container3">
                                   <div class="footer-section contact-form">
                                       <h2>Contactez-nous</h2>
                                       <br>
                                       <form action="contact_rapide.php"method="post">
                                           <input type="email" name="email" class="text-input contact-input" placeholder="votre e-mail" required/>
                                           <br>
                                           <textarea name="message" class="text-input contact-input" placeholder="Votre message rapide..."></textarea>
                                           <br>
                                           <button type="submit" class="btn btn-big" name="valid_form">
                                               <i class="fas fa-envelope"></i> 
                                               Envoyé
                                           
                                           </button>
                                       </form>
                               </div>
                       </div>
   </div> 
   
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








