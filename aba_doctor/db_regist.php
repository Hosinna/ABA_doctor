<?php
$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe ="";
$nom_base_donneés ="tutorail";
$conn = mysqli_connect($nom_serveur ,$utilisateur ,$mot_de_passe , $nom_base_donneés);

if(!$conn ){
  die("Connection failed " . mysqli_connect_error()); }
//echo " Connect successfully";

?>