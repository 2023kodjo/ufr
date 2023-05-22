<?php

// pour connecter enregistrement.php à connexion.php
require'connexion.php';

// code d'enregistrement 
$NOM=$_POST['nom'];
$PRENOM=$_POST['prenom'];
$DATE_DE_NAISSANCE=$_POST['date_de_naissance'];
$GENRE=$_POST['genre'];
$DATE_D_ENTREE_A_L_UFR=$_POST['date_d_entree_a_l_ufr'];
$PERSONNE_A_PREVENIR=$_POST['personne_a_prevenir'];

$req="INSERT INTO etudiant (nom,prenom,date_de_naissance,genre,date_d_entree_a_l_ufr,personne_a_prevenir) values ('$NOM','$PRENOM','$DATE_DE_NAISSANCE','$GENRE','$DATE_D_ENTREE_A_L_UFR','$PERSONNE_A_PREVENIR')";

$res=mysqli_query($conn,$req);

if(isset($res)){
    echo"SUCCES!";
}
else{
    echo"ERROR!";
}



 ?>