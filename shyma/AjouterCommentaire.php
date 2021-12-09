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
		header('Location:afficherListeCommentaire.php');
	}
	else
		$error = "Missing information";
}
?>
<html >
<!doctype html>
<html lang="en">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

   <title>evennements</title>
   <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
   <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
   <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
   <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
	<!-- Chartinator  -->
   <script src="js/chartinator.js" ></script>
   <script type="text/javascript">
	  

			  
		   });                       
	   });
   </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
 </head>
 <body>
 <div class="container my-5">
 <div class="left-content">
	  <div class="mother-grid-inner">
		   <!--header start here-->
			   <div class="header-main">
				   <div class="header-left">
						   <div class="logo-name">
									<a href="index.html"> <h1>Event</h1> 
								   <!--<img id="logo" src="" alt="Logo"/>--> 
								 </a> 								
						   </div>
						   <!--search-box-->
							   <div class="search-box">
								   <form>
									   <input type="text" placeholder="Search..." required="">	
									   <input type="submit" value="">					
								   </form>
							   </div><!--//end-search-box-->
							   <div class="clearfix"> </div>
						</div>
						<div class="header-right">
						   <div class="profile_details_left"><!--notifications of menu start -->
							   <ul class="nofitications-dropdown">
								   <li class="dropdown head-dpdn">
									   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
									   <ul class="dropdown-menu">
										   <li>
											   <div class="notification_header">
												   <h3>You have 3 new messages</h3>
											   </div>
										   </li>
										   <li><a href="#">
											  <div class="user_img"><img src="images/p4.png" alt=""></div>
											  <div class="notification_desc">
											   <p>Lorem ipsum dolor</p>
											   <p><span>1 hour ago</span></p>
											   </div>
											  <div class="clearfix"></div>	
										   </a></li>
										   <li class="odd"><a href="#">
											   <div class="user_img"><img src="images/p2.png" alt=""></div>
											  <div class="notification_desc">
											   <p>Lorem ipsum dolor </p>
											   <p><span>1 hour ago</span></p>
											   </div>
											 <div class="clearfix"></div>	
										   </a></li>
										   <li><a href="#">
											  <div class="user_img"><img src="images/p3.png" alt=""></div>
											  <div class="notification_desc">
											   <p>Lorem ipsum dolor</p>
											   <p><span>1 hour ago</span></p>
											   </div>
											  <div class="clearfix"></div>	
										   </a></li>
										   <li>
											   <div class="notification_bottom">
												   <a href="#">See all messages</a>
											   </div> 
										   </li>
									   </ul>
								   </li>
								   <li class="dropdown head-dpdn">
									   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									   <ul class="dropdown-menu">
										   <li>
											   <div class="notification_header">
												   <h3>You have 3 new notification</h3>
											   </div>
										   </li>
										   <li><a href="#">
											   <div class="user_img"><img src="images/p5.png" alt=""></div>
											  <div class="notification_desc">
											   <p>Lorem ipsum dolor</p>
											   <p><span>1 hour ago</span></p>
											   </div>
											 <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
											   <div class="user_img"><img src="images/p6.png" alt=""></div>
											  <div class="notification_desc">
											   <p>Lorem ipsum dolor</p>
											   <p><span>1 hour ago</span></p>
											   </div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p7.png" alt=""></div>
											  <div class="notification_desc">
											   <p>Lorem ipsum dolor</p>
											   <p><span>1 hour ago</span></p>
											   </div>
											  <div class="clearfix"></div>	
											</a></li>
											<li>
											   <div class="notification_bottom">
												   <a href="#">See all notifications</a>
											   </div> 
										   </li>
									   </ul>
								   </li>	
								   <li class="dropdown head-dpdn">
									   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
									   <ul class="dropdown-menu">
										   <li>
											   <div class="notification_header">
												   <h3>You have 8 pending task</h3>
											   </div>
										   </li>
										   <li><a href="#">
											   <div class="task-info">
												   <span class="task-desc">Database update</span><span class="percentage">40%</span>
												   <div class="clearfix"></div>	
											   </div>
											   <div class="progress progress-striped active">
												   <div class="bar yellow" style="width:40%;"></div>
											   </div>
										   </a></li>
										   <li><a href="#">
											   <div class="task-info">
												   <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												  <div class="clearfix"></div>	
											   </div>
											   <div class="progress progress-striped active">
													<div class="bar green" style="width:90%;"></div>
											   </div>
										   </a></li>
										   <li><a href="#">
											   <div class="task-info">
												   <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												   <div class="clearfix"></div>	
											   </div>
											  <div class="progress progress-striped active">
													<div class="bar red" style="width: 33%;"></div>
											   </div>
										   </a></li>
										   <li><a href="#">
											   <div class="task-info">
												   <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												  <div class="clearfix"></div>	
											   </div>
											   <div class="progress progress-striped active">
													<div class="bar  blue" style="width: 80%;"></div>
											   </div>
										   </a></li>
										   <li>
											   <div class="notification_bottom">
												   <a href="#">See all pending tasks</a>
											   </div> 
										   </li>
									   </ul>
								   </li>	
							   </ul>
							   <div class="clearfix"> </div>
						   </div>
						   <!--notification menu end -->
						   <div class="profile_details">		
							   <ul>
								   <li class="dropdown profile_details_drop">
									   <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										   <div class="profile_img">	
											   <span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
											   <div class="user-name">
												   <p>Malorum</p>
												   <span>Administrator</span>
											   </div>
											   <i class="fa fa-angle-down lnr"></i>
											   <i class="fa fa-angle-up lnr"></i>
											   <div class="clearfix"></div>	
										   </div>	
									   </a>
									   <ul class="dropdown-menu drp-mnu">
										   <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
										   <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
										   <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
									   </ul>
								   </li>
							   </ul>
						   </div>
						   <div class="clearfix"> </div>				
					   </div>
					<div class="clearfix"> </div>	
			   </div>
<!--heder end here-->
<!-- script-for sticky-nav -->
	   <script>
	   $(document).ready(function() {
			var navoffeset=$(".header-main").offset().top;
			$(window).scroll(function(){
			   var scrollpos=$(window).scrollTop(); 
			   if(scrollpos >=navoffeset){
				   $(".header-main").addClass("fixed");
			   }else{
				   $(".header-main").removeClass("fixed");
			   }
			});
			
	   });
	   </script>
	   <!-- /script-for sticky-nav -->
	   <div class="inner-block">


	  <h2>Ajouter un Commentaire par Admin</h2>
  <button class="btn btn-primary my-5"> <a href="afficherListeCommentaire.php" class="text-light">Return to List</a>
   
   </button>
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
	  

	  <!-- <script LANGUAGE="JavaScript">

var btn = document.getElementById('btn');
btn.addEventListener('click', validateForm);
function validateForm(e) {
   e.preventDefault();
   valider();
}
   function valider() 
   {
   var idE=window.document.MonForm.idE.value;
   var nomE=window.document.MonForm.nomE.value;
   var description=window.document.MonForm.description.value;
   var nbrplaceE=window.document.MonForm.nbrplaceE.value;
   var lieuE=window.document.MonForm.lieuE.value;
   var nbr_participant=window.document.MonForm.nbr_participant.value;
   var date_debut_event=window.document.MonForm.date_debut_event.value;
   var letters = /^[A-Za-z]+$/;
   var dateNow = new Date();
   var errorN = document.getElementById('errorN');
   var errorP = document.getElementById('errorP');
   var errorid= document.getElementById('errorid');
   var errorL = document.getElementById('errorL');
//var date_fin_event=window.document.MonForm.date_fin_event.value;
   
   if (nomE == "") {
	   errorN.innerHTML = "Veuillez entrer votre nom!";

   }

   else if (!(nomE.match(letters) && nomE.charAt(0).match(/^[A-Z]+$/))) {
	   errorN.innerHTML = "Veuillez entrer un nom valid!";
   }
   else {
	   errorN.innerHTML = "";

   }
   if (lieuE == "") {
	   errorL.innerHTML = "Veuillez entrer le lieu!";

   }/////test sur le lieu qui contient des lettres et commence par maj
   else if (!(lieuE.match(letters) && lieuE.charAt(0).match(/^[A-Z]+$/))) {
	   errorL.innerHTML = "Veuillez entrer un lieu valid!";
   }
   else {
	   errorL.innerHTML = "";

   }

   else if (!(idE.match(/[0-9]/g) &&   //////// le g dans l'expression régulière signifie la première instance trouvée
	   idE.match(/[A-Z]/g) &&
	   idE.match(/[a-z]/g) &&
	  idE.length >= 8)) {
	   errorid.innerHTML = "L'identifiant doit contenir au moins 8 caractères, dont au moins : Une lettre majuscule, Une lettre minuscule et un nombre.";

   }
   else {
	   errorid.innerHTML = "";

   }
   if (nbr_participant == "") {
	   errorid.innerHTML = "Veuillez entrer le nombre des memebres !";
   }
   
   
   /////////////////////////test sur le nombre d adhérent 


   else if (isNaN(nbr_participant) || nbr_participant < 10 || nbr_participant > 20) {
	   errorP.innerHTML = "Le nombre des participants doit être supérieur à 10 et inférieur à 20!";

   }
   else {
	   errorP.innerHTML = "";

   }
   if(nbr_placeE>20){
	   alert("les nombtres de places  ne doivent pas dépasser 20");
	   return false;
   }
  
   else return true;
}
</script> -->


<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->

   </body>
   </html>