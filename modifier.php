<?php
require'connexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $genre = $_POST['genre'];
    $date_d_entree_a_l_ufr = $_POST['date_d_entree_a_l_ufr'];
    $personne_a_prevenir = $_POST['personne_a_prevenir'];


    $requete = "UPDATE etudiant SET nom = :nom, prenom = :prenom, date_de_naissance = :date_de_naissance, genre = :genre, date_d_entree_a_l_ufr = :date_d_entree_a_l_ufr, personne_a_prevenir = :personne_a_prevenir WHERE id = :id";
    $stmt = $conn->prepare($requete);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':date_de_naissance', $date_de_naissance);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':date_d_entree_a_l_ufr', $date_d_entree_a_l_ufr);
    $stmt->bindParam(':personne_a_prevenir', $personne_a_prevenir);

if ($stmt->execute()) {
        header("Location: liste.php");
        exit();
    } else {
        echo "Erreur lors de la modification de l'apprenant.";
    }
}
$id = $_GET['id'];
$requete = "SELECT * FROM etudiant WHERE id = :id";
$stmt = $conn->prepare($requete);
$stmt->bindParam(':id', $id);
$stmt->execute();
$etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$etudiant) {
    echo "Apprenant non trouvé.";
    exit();
}
?>


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
    <div class="container mt-5 SessionM">
        <div class="row">
            <div class="col text-center bg-success text-white">
               <h2>FAIRE UNE MODIFICATION</h2>
            </div>

        </div>
        <div class="row">
            <div class="col">
            <form class=" offset-3 col-md-6 form" method="post" action="modifier.php">
                    <input type="hidden" name="id" value="<?php echo $etudiant['id']; ?>">
                    <br>
                    <div class="row offset-2 col-md-8">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" value="<?php echo $etudiant['nom']; ?>">
                    </div>

                    <div class="row offset-2 col-md-8">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom"
                     value="<?php echo $etudiant['prenom']; ?>">
                    </div>

                    <div class="row offset-2 col-md-8">
                    <label for="date_de_naissance">Date de naissance :</label>
                    <input type="date" name="date_de_naissance"
                        value="<?php echo $etudiant['date_de_naissance']; ?>">
                    </div>

                        <div class="row offset-2 col-md-8">
                    <label for="genre">Genre:</label>
                    <input type="text" name="genre" value="<?php echo $etudiant['genre']; ?>">
                    </div>

                    <div class="row offset-2 col-md-8">
                    <label for="date_d_entree_a_l_ufr">Date d'entree à l'ufr :</label>
                    <input type="date" name="date_d_entree_a_l_ufr"
                        value="<?php echo $etudiant['date_d_entree_a_l_ufr']; ?>">
                        </div>

                        <div class="row offset-2 col-md-8">
                    <label for="personne_a_prevenir">Personne à prevenir (Nom / Téléphone) :</label>
                    <input type="text" name="personne_a_prevenir"
                        value="<?php echo $etudiant['personne_a_prevenir']; ?>">
                        </div> <br>

                        <div class="row offset-4 col-md-4 b">
                         <input type="submit" value="Modifier">
                        </div>
                </form>
                <a href="liste.php"><button type="button" class="btn btn-outline-light my-4 offset-9 col-md-2"><img src="../projet_application_ufr/image/icone_modifier-removebg-preview.png" alt="" width="20%"> Voir Modification</button></a>
            </div>
        </div>
    </div>
</body>

</html>