<?php
// $conn=mysqli_connect('localhost','root','','ufr') or die(mysqli_error());
?>  

<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'ufr';
 
 //On essaie de se connecter
 
 $conn = new PDO("mysql:host=$servername;dbname=ufr", $username, $password);
 if ($conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)){
 }else{ echo "Erreur : " . $e->POSTMessage(); }
?>
