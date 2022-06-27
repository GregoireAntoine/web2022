
<html>
 
        <head>
            <! -- récuperation du css -->
            <link rel="stylesheet" type="text/css" href="projet.css" />
      
            <! -- récuperation javascript -->
           
              <title>Sinusoïda</title>
              
          </head>
  
    <body>
        <div id="en-tête">

            <div id="titre"> 
            <button onclick="window.location.href='/sinusoïda/index.php'">Boulangerie Antoine</button>
            </div>
            <div id="titresuite"> 
             <button onclick="window.location.href='/sinusoïda/Reservation.php'">Produits</button>
             <button onclick="window.location.href='/sinusoïda/produits.php'">Commander</button>
              <button onclick="window.location.href='/sinusoïda/Register.html'">S'inscrire</button>
              <button onclick="window.location.href='/sinusoïda/login.php'">se connecter</button>
              <button onclick="window.location.href='/sinusoïda/Mon_compte.php'">Mon compte</button>
              connecté : <?php  session_start(); if(isset($_SESSION["pseudo"])) { echo $_SESSION["pseudo"]; }?>
            </div>
        </div>
      <div id="body">
        
        <div id="page-acceuil">
           <div id="présentation">
             <div id="textepresentation">
               <center >
                 Nos heures d'ouvertures du mardi au samedi : 8h-17h<br>
                 vendredi : 7h - 18h<br><br>
                 Notre adresse : 
                  Chaussée de Nivelles 144, Mazy<br><br>
                 Attention a bien réserver au minimum la veille  pour vos pains et viennoiseries.
               </center>
              </div>
            </div>
            <div id="formulaireadmin">
              <footer>
            <form   action="accesadmin.php" method="post">
            Nom: <input type="text" name="pseudo" />
  
    Mot de passe: <input type="password" name="mdp" />
  
            <input type="submit"value="admin"/>
</form></footer></div>
    </body>
</html>