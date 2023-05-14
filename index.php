


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style\bootstrap-5.2.3-dist\css\bootstrap.min.css">
    <title>UFR</title>
</head>
<body>




<div class="container text-white D">
        <div class="row offset-1">
          <div class="col">
            <h2>MyUFR</h2>
            <p>Plate forme d'inscription rapide à Unité de formation et de recherche (UFR)</p> 
            </div>
            <div class="col-md-4 mt-4">
            <a href="liste.php"><button type="button" class="btn btn-outline-light ">Afficher la liste des inscrits</button></a>
            </div>
        </div>
        
       </div>
    <div class="container s1b">
        <div class="radar-msg is-in">
            <h3><strong>Bienvenue sur la page d'inscription UFR. <br> cliquer pour inscrire un étudiant à la promotion 2022-2023. <br><br> ▼</strong>.</h3>
            <a href="#page"><button class="radar-msg-btn">inscrire</button></a>
          </div>
    </div>


   
    <div class="container s1">
  
    <div class="container text-white s0" id=page>
     <div class="row offset-1">
         <h2>MyUFR</h2>
         <p>Plate forme d'inscription rapide à Unité de formation et de recherche (UFR)</p> 
     </div>
    </div>
  
      <br>
       
    <div class="row offset-1 col-md-10 text-center text-white h">
           <h1>  <img class="logo" src="image/WhatsApp Image 2023-05-09 at 13.54.31.jpeg" alt="" width="50px" height="50px"> Université Joseph Ki-ZERBO</h1>
        </div>
        <div class="row text-center bg-danger offset-2 col-md-8 text-white">
         <h3> Formulaire d'inscription UFR</h3>
        </div>
        
      <form class=" offset-3 col-md-6 form" method="post" action="enregistrement.php">
        <div class="row  offset-2 col-md-8">
          <label for="nom">Nom</label>
          <input type="text" id="nom" name="nom" required>
        </div> 
        <div class="row offset-2 col-md-8">
          <label for="prenom">Prenom(s)</label>
          <input type="text" id="prenom" name="prenom" required>
        </div> 
        <div class="row offset-2 col-md-8">
          <label for="date_de_naissance">Date de naissance</label>
          <input type="date" id="date_de_naissance" name="date_de_naissance" required>
        </div> 
  
        <div class="row text-white offset-2 col-md-8">
          <div>
          <input type="radio" id="genre" name="genre" required value="homme"> Homme<br>
          <input type="radio" id="genre" name="genre" required value="Femme"> Femme
          </div>
        </div>

           <br>

        <div class="row offset-2 col-md-8">
          <label for="date_d_entree_a_l_ufr">Date d'entreé à l'ufr</label>
          <input type="date" id="date_d_entree_a_l_ufr" name="date_d_entree_a_l_ufr" required>
        </div>
        <div class="row offset-2 col-md-8">
          <label for="personne_a_prevenir">Personne à prevenir (Nom / Téléphone)</label>
          <input type="text" id="personne_a_prevenir" name="personne_a_prevenir" required>
        </div> <br>
        <div class="row offset-4 col-md-4 b">
            <input type="submit" value="Enregistrer">
        </div>
        
       </form>  
       
       <div class="row center offset-9 col-md-3">
            <a href="liste.php"><button type="button" class="btn btn-outline-light">Afficher la liste</button></a>
      </div>
          <br>
    </div> 
    <footer class="container text-white footer">
       <h6 class=" text-center FT">Copyright © MyUFR / Université Joseph KI-ZERBO 2023 - Tous droit réservés.</h6>
    </footer>





</body>
</html>