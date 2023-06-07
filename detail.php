
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
    <div class="container mt-5">
        <div class="row">
            <div class="col text-white text-center bg-success">
               <h1>Détails de l'étudiant</h1>
            </div>
        </div>
        <br>
    
    <?php
    // Vérifier si l'ID de l'étudiant est présent dans la requête GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Effectuer une requête pour récupérer les détails de l'étudiant avec cet ID
        require 'connexion.php'; // Inclure le fichier de connexion à la base de données

        $requete = "SELECT * FROM etudiant WHERE id = :id";
        $stmt = $conn->prepare($requete);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Vérifier si l'étudiant existe
        if ($stmt->rowCount() > 0) {
            $etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
            ?>
            <table>
               
                <tr>
                    <th>Nom :</th>
                    <td><?php echo $etudiant['nom']; ?></td>
                </tr>
                <tr>
                    <th>Prénom :</th>
                    <td><?php echo $etudiant['prenom']; ?></td>
                </tr>
                <tr>
                    <th>Date de naissance :</th>
                    <td><?php echo $etudiant['date_de_naissance']; ?></td>
                </tr>
                <tr>
                    <th>Genre :</th>
                    <td><?php echo $etudiant['genre']; ?></td>
                </tr>
                <tr>
                    <th>Date d'entree à l'ufr :</th>
                    <td><?php echo $etudiant['date_d_entree_a_l_ufr']; ?></td>
                </tr>
                <tr>
                    <th>Personne à prevenir :</th>
                    <td><?php echo $etudiant['personne_a_prevenir']; ?></td>
                </tr>
            </table>
            <?php
        } else {
            echo "Aucun étudiant trouvé avec cet ID.";
        }


        $conn = null;
    } else {
        echo "ID non spécifié.";
    }
    ?>
    </div>
    <div class=" offset-1 col-md-4 py-3 p mt-4">
               <a href="liste.php"><button type="button" class="btn btn-outline-danger ">Afficher la liste des inscrits</button></a>
             </div>
</body>
</html>