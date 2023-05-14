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

<body>
	<div class="container">
		<h1>Liste des étudiants inscrits</h1>
		<table class="table table-striped">
				<tr>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Date_de_naissance</th>
                    <th>Genre</th>
                    <th>Date_d_entree_a_l_ufr</th>
                    <th>Personne_a_prevenir</th>
				</tr>

			<?php

						// Requête SQL pour récupérer les données des etudiants

										require'connexion.php';
										$requete = "SELECT * FROM etudiant";
										$query = mysqli_query($conn, $requete);

										// Affichage des données dans un tableau

											// Boucle à travers les lignes de résultats
											while($row = mysqli_fetch_assoc($query)) {
												echo "<tr>";
													echo "<td>" . $row["nom"] . "</td>";
													echo "<td>" . $row["prenom"] . "</td>";
													echo "<td>" . $row["date_de_naissance"] . "</td>";
													echo "<td>" . $row["genre"] . "</td>";
													echo "<td>" . $row["date_d_entree_a_l_ufr"] . "</td>";
													echo "<td>" . $row["personne_a_prevenir"] . "</td>";
												echo "</tr>";	
											}
				?>


        </table>
    </div>
	<!-- Chargement des fichiers JavaScript de Bootstrap -->
	<script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>