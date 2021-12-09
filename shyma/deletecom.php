<?php

include "C:/xampp/htdocs/gestiondesevennements/Model/commentaire.php";

include_once "../../config.php";
include_once "C:/xampp/htdocs/gestiondesevennements/controller1/commentairesC.php";

$Art=new commentairesC();

if(isset($_GET['idCom']))
{
  $idCom=$_GET['idCom'];
  $Art-> DeleteC($idCom);
  echo "succeeeesssss supprimer";
 header('Location: afficher_commentaire.php');

}
header("refresh:1;url=afficher_commentaire.php");



















?>
