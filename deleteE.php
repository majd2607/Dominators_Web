<?php
include "C:/xampp/htdocs/gestiondesevennements/Model/evennement.php";

include_once "../../config.php";
include_once "C:/xampp/htdocs/gestiondesevennements/controller1/evennementsC.php";

$Art=new eventC();

if(isset($_GET['idE']))
{
  $idE=$_GET['idE'];
  $Art-> DeleteE($idE);
  echo "succeeeesssss supprimer";
 header('Location: Afficherevennements.php');

}
header("refresh:1;url=Afficherevennements.php");
?>

