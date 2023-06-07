<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../projet_application_ufr/style/style2.css">
  <link rel="stylesheet" href="../projet_application_ufr/style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <title>UFR</title>
</head>
<body>
<br>
<div class="container text-white bg-danger">
        <div class="row pt-1">
            <div class="col">
               <h2>MyUFR</h2>
               <p>Plate forme d'inscription rapide à Unité de formation et de recherche (UFR)</p> 
             </div>
        </div> 
       </div>
<div class="container">

<form action="" method="POST">
 <label for="nom">Nom d'utilisateur ou mail</label>
 <input type="text" id="nom" name="nom" required><br>
 <label for="prenom">Prénom:</label>
 <input type="text" id="prenom" name="prenom" required><br>
<label for="email">E-mail:</label>
 <input type="email" id="email" name="email" required><br>
 <label for="mot_de_passe">Mot de passe:</label>
 <input type="password" id="mot_de_passe" name="mot_de_passe" required><br>
 <input type="submit" id="administrer" name="administrer" value="administrer">
</form>
  </div>
</body>
</html>



<?php
include('connexion.php'); 
if (isset($_POST['administrer'])){
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $mot_de_passe = $_POST['mot_de_passe'];
  $query = "INSERT INTO user ( nom, prenom, email, mot_de_passe) VALUES (:nom, :prenom, :email, :mot_de_passe)";
  $query_run = $conn->prepare($query);
  $query_run->bindParam(':nom',$nom);
  $query_run->bindParam(':prenom',$prenom);
  $query_run->bindParam(':email',$email);
  $query_run->bindParam(':mot_de_passe',$mot_de_passe);
  if($query_run->execute()) {
   echo $msg_success = "Vos données ont éte bien enrégistrées!";
    header('Location: login.php');
  }else{
   echo $msg = "erreur d'enregistrement";
  }
}
?>

<script src="../projet_application_ufr/script/main2.js"></script>
<script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>