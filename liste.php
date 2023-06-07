<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style\bootstrap-5.2.3-dist\css\bootstrap.min.css">
    <title>Liste_UFR</title>
</head>


<body class="">
	<br>
	<div class="container">
		<div class="row">
			<div class="col md-12">
		      <img src="../projet_application_ufr/image/deux_etudiants plan coupé (2).png" alt="" width="100%" >
			  <a href="utilisateur.php"><button type="button" class="btn btn-outline-danger  mt-3 offset-9 col-md-2"><img src="../projet_application_ufr/image/icone 2.png" alt="" width="20%"> Go Back</button></a>
			</div>
		</div>
		<div class="row">
			<div class="col md-12 bg-success text-white text-center my-3">
			<h1>Liste des étudiants inscrits</h1>
			</div>
		</div>
		
		<table class="table table-striped">
				<tr>
				    <th>N°</th>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Date_de_naissance</th>
                    <th>Genre</th>
                    <th>Date_d_entree_a_l_ufr</th>
                    <th>Personne_a_prevenir</th>
					<th>Action</th><th></th>
				</tr>

			       <?php

                require'connexion.php'; 
                $requete = "SELECT id, nom, prenom, date_de_naissance, genre, date_d_entree_a_l_ufr,personne_a_prevenir FROM etudiant";
                $result = $conn->query($requete);
                if($result->rowcount()>0){
                    $num= 1;
                    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        $etudiantId = $row["id"];
                        echo "<tr>";
                        echo "<td>" . $num. "</td>";
                        echo "<td>" . $row["nom"] . "</td>";
                        echo "<td>" . $row["prenom"]  . "</td>";
                        echo "<td>" . $row["date_de_naissance"] . "</td>";
                        echo "<td>" . $row["genre"] . "</td>"; 
                        echo "<td>" . $row["date_d_entree_a_l_ufr"] . "</td>";
                        echo "<td>" . $row["personne_a_prevenir"] . "</td>";
                        echo "<td><a href='detail.php?id=" . $etudiantId . "' class='btn btn-dark'>
                        Detail
                        </a></td>";
                        echo "<td><a href='modifier.php?id=" . $etudiantId . "' class='btn btn-success'> 
                        Modifier
                        </a></td>";
                        echo "<td><a href='delete.php?id=" . $etudiantId . "' class='btn btn-danger' onclick='return confirm(\"vouler-vous supprimer?\")'>
                        Supprimer
                        </a></td>";
                        $num++;
                        echo "</tr>";
                    }
                } else{
                    echo "aucun donnée trouvée";
                }
                $conn=NULL;
             ?>


             
        </table>
    </div>

	<footer class="container text-white footer">
       <h6 class=" text-center FT">Copyright © MyUFR / Université Joseph KI-ZERBO 2023 - Tous droit réservés.</h6>
    </footer>
	<!-- Chargement des fichiers JavaScript de Bootstrap -->
	<script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>