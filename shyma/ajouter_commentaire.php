<?php
 include_once 'C:/xampp/htdocs/gestiondesevennements/controller1/commentairesC.php';
 include_once 'C:/xampp/htdocs/gestiondesevennements/Model/commentaire.php';
$error = "";
// create event
$commentaire = null;

// create an instance of the controller
$commentairesC= new commentairesC();
if (
	//isset($_POST["idCom"]) &&
	isset($_POST["text"]) &&		
	isset($_POST["date_commentaire"])
	
   )
 {
	if (
		//!empty($_POST["idCom"]) && 
		!empty($_POST['text']) &&
		!empty($_POST["date_commentaire"])
		
		)
	 {
		$commentaire= new commentaires(
			//$_POST['idCom'],
			$_POST['text'],
			$_POST['date_commentaire']
		
		);
		$commentairesC->ajouterCom($commentaire);
		header('Location:afficher_commentaire.php');
	}
	else
		$error = "Missing information";
}
?>


<html >
<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires</title>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>	
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Edu4You</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html" >About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="afficher_event.php" class="active">Evennement</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
         <!-- Page Header-->
         <header class="masthead" style="background-image: url('assets/img/cover2.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h2>Il n'y a vraiment que deux choses qui puissent faire changer un être humain : un grand amour ou la lecture d'un grand livre.</h2>
                            <h3 class="subheading">Citation de célébrité</h3>
                            <span class="meta">
                                <a href="#!">Paul Desalmand</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          <h1><B class="mb-0 bread" >Ajouter un commentaire</B>
          </div>
        </div>
      </div>
	  <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
    
  <button class="btn btn-primary my-5"> <a href="afficher_commentaire.php" class="text-light">Return to List commentaires</a>
   </button>
   <button class="btn btn-primary my-5"> <a href="afficher_event.php" class="text-light">Return to List evennements</a>
   </button>
   <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
    
  <form method="post">

 <div class="form-group">
  <h6 ><label  class="form-label">Commentaire</label></h6>
   <input type="text" class="form-control" id="text" placeholder="enter you comment" name="text" >
 </div>

 <div class="form-group">
 <h6>  <label  class="form-label">date_commentaire</label></h6>
   <input type="date" class="form-control" id="date_commentaire" placeholder="enter the date" name="date_commentaire" >
  
 </div>

 
 <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
</form>
  </div>
	  
  
    </body>
    </html>