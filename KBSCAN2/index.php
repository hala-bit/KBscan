<?php
if(isset($_POST['submit'])){
    $mailto ="manahala_@hotmail.com";
    $from = $_POST['email'];
    $name =$_POST['nom'];
    $subject =$_POST['message'];
    $subject2 = "your message submitted";
    $message ="Client Name :" .$nom. "wrote the following message". "\n\n". $_POST['message']; 
    $message2 ="dear" .$nom. "thank you";
    $headers ="from :".$from;
    $headers2 ="from :".$mailto;
    $result = mail($mailto, $subject, $message, $headers);
    $result2 = mail($from, $subject2, $message2, $headers2);
    if($result){
        echo '<script type="text/javascript">alert("message was sent successfully")</script>';
    }else{
        echo '<script type="text/javascript">alert("submission failed")</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBSCAN</title>
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="./image/logo.png" alt=""></a>
        <div class="menuToggle" onclick="toggleMenu();"></div>
        <ul class="navbar">
            <li><a href="#baniere" onclick="toggleMenu();">Acueil</a></li>
            <li><a href="#apropos" onclick="toggleMenu();">A propos</a></li>
            <li><a href="#service" onclick="toggleMenu();">Nos Avantage</a></li>
            <li><a href="#temoignge" onclick="toggleMenu();">Nos service</a></li>
            <li><a href="#contact" onclick="toggleMenu();">Nos Contact</a></li>
           
        </ul>
    </header>
    <section class="baniere" id="baniere" >
  
<div class="baniere-text">
    <h1>KBSCAN</h1>
<p>Acteur incontournable dans l’archivage physique et électronique ainsi que dans la gestion de 
    la chaîne documentaire et pionner dans son domaine, KABESCAN est considéré comme un 
    véritable atelier de digitalisation : il conseille et accompagne les entreprises dans leur passage 
    vers le zéro papier.</p>
</div>
<div class="baniere_btn">
    <a href="#contact"> <span></span> Contact</a>
</div>
    </section>
    
    <section class="apropos" id="apropos">
        <div class="titre-text">
            <p>À propos</p>
            <h1>À propos de nous?</h1>
        </div>
        <div class="propos_boite">
            
            <h1>QU’EST-CE QUE KABESCAN ?</h1>
            <p class="titre">La dématérialisation croissante des documents et la démocratisation des outils de communication informatiques ont conduit les entreprises à gérer de plus en plus de documents 
                électroniques.<br> 
                Les solutions de Gestion électronique documentaire de KABESCAN sont basées sur l’intelligence artificielle et permettent d’exploiter l’ensemble des documents au format numérique.
                Ce procédé comprend l’acquisition de documents (numérisation ou création de documents),
                le stockage d’informations, l’accès et la diffusion des documents, l’indexation et le classement.</p>
                <div class="im-mission">

                </div>
            
        </div>
    </section>
        <section class="service" id="service">
            <div class="titre-text">
                <p>AVANTAGES</p>
                <h1>Plus Que la qualité</h1>
            </div>
            <div class="service_boite">
                <div class="service_unique">
                <img src="./image/s2.jpg" alt="">
                <div class="text_sur">
                    <div class="descrip">
                       <h3>LES AVANTAGES DE KABESCAN</h3>
                       <hr>
                       
                           <div class="description">
                               <div class="mission_icon">
                                  <i class="fa-solid fa-plus"></i>
                               </div>
                               <div class="mission-text">
                                 <p> L’accès rapide et à distance aux documents permettant l’accès à la base de GED
                                 et rendant possible une consultation immédiate des documents.</p>
                                </div>
                           </div>
                           <div class="description">
                            <div class="mission_icon">
                               <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="mission-text">
                              <p> Une plateforme unique pour l’ensemble des documents de l’entreprise : les documents 
                                produits dans l’entreprise sont tous stockés dans une même base, prévenant ainsi
                                le risque d’une dispersion des documents.</p>
                             </div>
                          </div>
                          <div class="description">
                            <div class="mission_icon">
                               <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="mission-text">
                              <p>L’archivage et la conservation des documents : le système de GED garantit
                                la conservation des documents produits dans l’entreprise, et assure la pérennité
                                dans l’accès aux documents.</p>
                             </div>
                          </div>
                          
                          <div class="description">
                            <div class="mission_icon">
                               <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="mission-text">
                              <p>La sécurité des données grâce à une fonctionnalité de gestion des accès.</p>
                             </div>
                          </div>
                         
                      
                    </div>
                </div>
            </div>
            <div class="service_unique">
                <img src="./image/s1.jpg" alt="">
                <div class="text_sur">
                    <div class="descrip">
                       <h3>AVANTAGES D’UNE GESTION ÉLECTRONIQUE DOCUMENTAIRE</h3>
                       <hr>                   
                           <div class="description">
                               <div class="mission_icon">
                                  <i class="fa-solid fa-plus"></i>
                               </div>
                               <div class="mission-text">
                                 <p>  Gérer et uniformiser les documents de leur création à leur archivage.</p>
                                </div>
                           </div>
                           <div class="description">
                            <div class="mission_icon">
                               <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="mission-text">
                              <p> Partager les données avec un certain nombre de personnes autorisées et permettre 
                                aux collaborateurs de mettre à jour les documents.</p>
                             </div>
                          </div>
                          <div class="description">
                            <div class="mission_icon">
                               <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="mission-text">
                              <p> Réduire les coûts de traitement.</p>
                             </div>
                          </div>
                          <div class="description">
                            <div class="mission_icon">
                               <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="mission-text">
                              <p>Une meilleure gouvernance documentaire au sein de l’entreprise ainsi qu’une gestion 
                                facilitée de documents partagés entre collaborateurs.</p>
                             </div>
                          </div>
                
                    </div>
                </div>
            </div>
            </div>
    
        </section>
       
        <section class="temoignge" id="temoignge">
            <div class="titre-text">
                <p>SERVICES</p>
                <h1>Pourquoi Nous?</h1>
            </div>
            <div class="temoignagee-boite">
                <div class="temoignage-simple">
                    <div class="utilisateur">
                        <h3>ARCHIVAGE PHYSIQUE ET ÉLECTRONIQUE</h3>
                        <div class="info_util">
                            
                        </div>
                    </div>
                
                    <p>-Documents papier</p>
                    
                    <p>-Archives intermédiaires</p>
                    
                    <p>-Digital Workplace</p>
                   
                    <p>-Solutions libres et open source (GEC,SAE etc.)</p>
                </div>
                <div class="temoignage-simple">
                    <div class="utilisateur">
                       <h3>DEMATERIALISATION</h3>
                        <div class="info_util">
                            
                        </div>
                    </div>
                    <p>-Digital Workplace</p>
                    <p>-Solutions libres et open source (GEC,SAE etc.)</p>
                    <p>-Gestion électronique de Courriers (GEC)</p>
                    <p>-estion électronique de documents (GED)</p>
                    <p>-Signature électronique</p>
                </div>
                <div class="temoignage-simple">
                    <div class="utilisateur">
                        <h3>CONSEIL & INGÉNIERIE</h3>
                        <div class="info_util">
                            
                        </div>
                    </div>
                    <p>-Formation</p>
                    <p>-Traitement documentaire</p>
                    <p>-Règlement général sur la protection des données</p>
                </div>
                <div class="temoignage-simple">
                    <div class="utilisateur">
                        <h3>EXTERNALISATION DES PROCESSUS MÉTIERS</h3>
                        <div class="info_util">
                            
                        </div>
                    </div>
                    <p>-Numérisation de documents</p>
                    <p>-Numérisation fidèle</p>
                    <p>-Certifié NF544 / NF Z42-026</p>
                </div>
            </div>
        </section>
        
    

  
 <footer id="contact">
    <div class="pied-logo">
        <a href=""><img src="./image/logo.png" alt=""></a>
    </div>
    <div class="pied-page">
    <div class="contactform">
    <form action="https://formsubmit.co/el/nejato" method="POST">
        <div class="inputboite">
          <input type="text" placeholder="Nom" name="nom">
        </div>
        <div class="inputboite">
          <input type="text"placeholder="email" name="email"> 
        </div>
        <div class="inputboite">
        <textarea placeholder="Message" name="message"></textarea>
       </div>
       <div class="inputboite">
         <input type="submit" value="envoyer">
       </div>
    </form>
      </div>
     
      <div class="pied-propo">
         <a href="#apropos"> <h2>À propos </h2></a>
          <p>-QU’EST-CE QUE KABESCAN ?</p>
      </div>
      <div class="pied-avantage">
         <a href="#service"> <h2>Nos Avantages</h2></a>
          <p>-L’accès rapide et à distance aux documents </p>
          <p>-Une plateforme unique pour l’ensemble des documents de l’entreprise.</p>
          <p>-L’archivage et la conservation des documents.</p>
      </div>
      <div class="pied-service">
         <a href="#temoignge"> <h2>Nos Services</h2></a>
          <p>-ARCHIVAGE PHYSIQUE ET ÉLECTRONIQUE</p>
          <p>-DEMATERIALISATION</p>
          <p>-CONSEIL & INGÉNIERIE</p>
          <p>-EXTERNALISATION DES PROCESSUS MÉTIERS</p>
      </div>
        <div class="pied-d">
          
          <p>Localisation<i class="fas fa-map-marker"></i></p>
          <p>manahala_@hotmail.com<i class="far fa-envelope"></i></p>
          <p>+212658240584<i class="fas fa-mobile"></i></p>
      </div>
     </div>
 </footer>
     <script type="text/javascript">
        window.addEventListener('scroll', function(){
            const header =document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0 );
        });
   
        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('active');
            menuToggle.classList.toggle('active');
        }
    </script>
</body>
</html>