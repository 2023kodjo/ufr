
<?php
include('connexion.php'); 
$sql = "SELECT email,mot_de_passe FROM user";
$result = $conn->query($sql);
if (isset($_POST['connecter'])){
    if(!empty($_POST['email']) AND !empty($_POST['mot_de_passe'])){
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $email_defaut=$row["email"];
        $mot_de_passe_defaut=$row["mot_de_passe"];
        $email_saisi=htmlspecialchars($_POST['email']);
        $mot_de_passe_saisi=htmlspecialchars($_POST['mot_de_passe']);
    }
    if($mot_de_passe_defaut==$mot_de_passe_saisi AND $email_defaut==$email_saisi){
        header('Location:utilisateur.php');
    }else{
        if ($result->rowCount()== 0) {
            header('Location:index.php');
        }
     echo'<h6 class="text-danger"> votre mot de passe est incorrect!</h6>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\bootstrap-5.2.3-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="../projet_application_ufr/style/style2.css">
    <title>UFR</title>
</head>
<body>


<div class="container">
<form action="" method="POST">
  <div class="row">
    <div class="col">
     <label for="email">E-mail:</label>
     <input type="email" id="email" name="email" required><br>
   </div>
 </div>

 <label for="mot_de_passe">Mot de passe:</label>
 <input type="password" id="mot_de_passe" name="mot_de_passe" required><br>

 <input type="submit" id="connecter" name="connecter" value="connecter">
</form>
</div>





</body>
</html>
