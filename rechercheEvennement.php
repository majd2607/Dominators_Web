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
<div class="container ">
	<div class="left-content">
	  
    
<form method="post">
<label>Rechercher un evennement</label>
<input type="text" name="search">
<input type="submit" name="submit">
<div>

        <button class="btn btn-primary my-5"> <a href="Afficher_event.php" class="text-light">liste events</a>
    
</button>
</div>
    <table class="table">
<thead>
    <tr>
      <th scope="col">Nom </th>
      <th scope="col">Lieu </th>
      <th scope="col"> Place </th>
      <th scope="col"> Participants</th>
      <th scope="col">Description </th>
      <th scope="col">Date debut  </th>
      <th scope="col">Date fin </th>
    </tr>
  </thead>
  <tbody>
    
</form>



<?php

$con = new PDO("mysql:host=localhost;dbname=evennement1",'root','');

if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `event` WHERE nomE= '$str' group by nomE");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    if($row = $sth->fetch())
    {
        ?>
       </div><a href="#!"><img class="img-fluid " width="500" height="400"; src="assets/img/<?php echo $row->image ;?>"   alt="image"></a>
            <tr>
                
                <td><?php echo $row->nomE; ?></td>
                <td><?php echo $row->lieuE;?></td>
                <td><?php echo $row->nbrplaceE; ?></td>
                <td><?php echo $row->nbr_participant;?></td>
                <td><?php echo $row->description; ?></td>
                <td><?php echo $row->date_deb_event; ?></td> 
                <td><?php echo $row->date_fin_event; ?></td>    
  
                  </tr>

        </table>
    </tbody>
<?php 
    }
        
        
        else{
            echo "idE Does Not Exist";
        }


}

?>
<tr>
			
			</tr>
			</div>

		</table>
		<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->

</body>
</html>