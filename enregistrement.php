

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
<div class="container">
 <div class="row">
			<div class="col md-12">
		      <img src="../projet_application_ufr/image/deux_etudiants plan coupé (2).png" alt="" width="100%" >
			  <a href="index.php"><button type="button" class="btn btn-outline-danger  mt-3 offset-9 col-md-2"><img src="../projet_application_ufr/image/icone 2.png" alt="" width="20%"> Go Back</button></a>
			</div>
            <div class=" text-center fs-2 bg-danger text-white mt-3">
                Bravo! Inscription éffectuée avec succès!
                <img src="../projet_application_ufr/image/validé.png" alt="" width="10%">
            </div>
		</div>
 </div>


 <div class="container text-white D">
        <div class="row pt-1">
            <div class="col">
               <h2>MyUFR</h2>
               <p>Plate forme d'inscription rapide à Unité de formation et de recherche (UFR)</p> 
             </div>
             <div class="col-md-4 mt-4">
               <a href="liste.php"><button type="button" class="btn btn-outline-light ">Afficher la liste des inscrits</button></a>
             </div>
        </div> 
       </div>


 <?php
    session_start();
    require'connexion.php'; 
      if(isset($_POST)){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $date_de_naissance=$_POST['date_de_naissance'];
        $genre=$_POST['genre'];
        $date_d_entree_a_l_ufr=$_POST['date_d_entree_a_l_ufr'];
        $personne_a_prevenir=$_POST['personne_a_prevenir'];
        $query = "INSERT INTO etudiant (nom, prenom, date_de_naissance, genre, date_d_entree_a_l_ufr, personne_a_prevenir)
        VALUES (:nom, :prenom, :date_de_naissance, :genre, :date_d_entree_a_l_ufr, :personne_a_prevenir)";
        $query_run=$conn->prepare($query);
        $query_run->bindParam(':nom',$nom);
        $query_run->bindParam(':prenom',$prenom);
        $query_run->bindParam(':date_de_naissance',$date_de_naissance);
        $query_run->bindParam(':genre',$genre);
        $query_run->bindParam(':date_d_entree_a_l_ufr',$date_d_entree_a_l_ufr); 
        $query_run->bindParam(':personne_a_prevenir',$personne_a_prevenir);
      try {
        $query_run->execute();
        $msg_success=" Vos données ont été bien enregistrées!";
          } catch (PDOException $e) {
                   $msg="Erreur d'enregistrement" . $e->getMessage();
                   }
}

?>



	<!-- Chargement des fichiers JavaScript de Bootstrap -->
	<script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>