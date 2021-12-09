
<!DOCTYPE html>
<html lang="en">
    <!-- END nav -->
    <head>
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
          <h1><B class="mb-0 bread" >Evennements</B>
          </div>
        </div>
      </div>
    </div>
   
</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
          <div class="dropdown">
  <button class="btn btn-secondary my-4 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  -----Choisissez un metier -----
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <li><a class="dropdown-item" href="rechercheEvennement.php">Rechercher l' evennement par son nom</a></li>
    <li><a class="dropdown-item" href="sort_eventbyDatedeb.php">Trier les evennements selon un ordre descroissant des dates</a></li>
    <li><a class="dropdown-item" href="sort_event_bynbrPlace.php">Trier les evennements selon un ordre decroissant de places</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>
    					
    			</div>
    		</div>
          <!-- Post Content-->
          <?php
            include_once "C:/xampp/htdocs/gestiondesevennements/Model/evennement.php";
            include_once "C:/xampp/htdocs/gestiondesevennements/controller1/evennementsC.php";
            include_once "C:/xampp/htdocs/gestiondesevennements/config.php";
           
            $Art=new eventC();
                        $liste=$Art->afficherEvent();
                        foreach ($liste as $aux) {
            ?>

          <article class="mb-4 my-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                      
                        <h2 class="fst-italic"  ><?php echo "Nom de l'evennement: ".$aux["nomE"]; ?></h2>
                        <p class="fst-italic"><?php echo ''. $aux["description"]; ?></p></p>
                        <a href="#!"><img class="img-fluid " width="500" height="400"; src="assets/img/<?php echo $aux["image"];?>"   alt="image"></a>
                        <table class="table">
        <thead>
          <tr>
            <th>Date Debut</th>
            <th>Date Fin</th>
            <th>Lieu</th>
            <th>Periodicité</th>
          

          </tr>
        </thead>
        <tbody>
         
          <tr class="table-danger">
          <td><?php echo  'Profitez du : '. $aux["date_deb_event"];?></td>
            <td><?php echo 'Au : '. $aux["date_fin_event"]; ?></td>
            <td><?php echo 'à: '.$aux["lieuE"]; ?></td>
            <td>Annuel</td>
                        </tr>
                        </tbody>
                        </table>
                        <div class="form-floating">
  <button type="button" class="btn btn-outline-secondary" ><a href="ajouter_commentaire.php">Commenter</a></button>
</div>
                       <div class="text py-3 pb-4 px-3 text-center">
                            <button type="button" class="btn btn-outline-warning btn-lg btn-block"><a href="AjouterParticipant.php"></a>Patriciper</button>
                        
                    </div>
                </div>
            </div> 
        </article>
            <?php
                        }
            ?>


         <div class="Box">
    <div class="card" style="width: 18rem;">
  <img src="assets/img/img2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">History</h5>
    <p class="card-text">une idée genérale sur notre evennement ,son histoire et son but.</p>
    <a href="about.html" class="btn btn-primary stretched-link">Cliquez</a>
</div>
</div>
</div>
                      </div>
<div class="row no-gutters slider-text align-items-center justify-content-center">
   <div class="col-md-2 ftco-animate text-center">
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
                      </div>
                      </div>
                      <div>
                      <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
                      <img src="assets/img/C2.jpg" width="600" height="200"/> 
                      <img src= "assets/img/1.jpg" width="500" height="200" class="my-5"/>
                      </div>
 <!-- Footer-->
 <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2021</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
  </body>

</html>