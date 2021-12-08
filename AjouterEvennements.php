
<?php
 include_once 'C:\xampp\htdocs\gestiondesevennements\Model\evennement.php';
 include_once 'C:\xampp\htdocs\gestiondesevennements\controller1\evennementsC.php';

 $error = "";

 // create event
 $event = null;

 // create an instance of the controller
 $eventC = new eventC();
 if (
     isset($_POST["nomE"]) &&		
     isset($_POST["lieuE"]) &&
     isset($_POST["nbrplaceE"]) &&
     isset($_POST["nbr_participant"]) && 
     isset($_POST["description"])&&
     isset($_POST["date_deb_event"])&&
     isset($_POST["date_fin_event"])&&
	 isset($_POST["image"])
	 )
{
       if (
         !empty($_POST["nomE"]) &&
         !empty($_POST["lieuE"]) && 
         !empty($_POST["nbrplaceE"])&&
         !empty($_POST["nbr_participant"]) && 
         !empty($_POST["description"])&&
         !empty($_POST["date_deb_event"])&&
         !empty($_POST["date_fin_event"])&&
		 !empty($_POST["image"])
		 )
	   
      {
         $event = new event(
             $_POST['nomE'],
             $_POST['lieuE'], 
             $_POST['nbrplaceE'],
             $_POST['nbr_participant'],
             $_POST['description'],
             $_POST['date_deb_event'],
             $_POST['date_fin_event'],
			 $_POST['image']
         );
         $eventC->ajouterevent($event);
         header('Location:afficherEvennements.php');
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
  <div class="container my-5">
  <div class="left-content">
  <button class="btn btn-primary my-5"> <a href="afficherEvennements.php" class="text-light">Return to List</a>
    
    </button>
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


       <h2 class=" my-5">Add  An Event</h2>
	
   <form method="post">
  <div class="form-group">
   <h6 ><label  class="form-label">Event name</label></h6>
    <input type="text" class="form-control" id="nomE" placeholder="enter the name of the event" name="nomE" >
  </div>

  <div class="form-group">
  <h6>  <label  class="form-label">Location of the event</label></h6>
    <input type="text" class="form-control" id="lieuE" placeholder="enter the place of the event" name="lieuE" >
   
  </div>
  <div class="form-group">
   <h6> <label  class="form-label">Number of places</label></h6>
    <input type="number" class="form-control" id="nbrplaceE" placeholder="enter the number of place in this event" name="nbrplaceE" >
   
  </div>
  <div class="form-group">
   <h6> <label  class="form-label">Number of participants</label></h6>
    <input type="number" class="form-control" id="nbr_participant" placeholder="the number of participant in this event" name="nbr_participant" >
   
  </div>
  <div class="form-group">
    <h6><label  class="form-label">Description of the event</label></h6>
    <input type="text" class="form-control" id="description" placeholder="enter the descrption" name="description" >
   
  </div>
  <div class="form-group">
   <h6> <label  class="form-label">Start date of the event</label></h6>
    <input type="date" class="form-control" id="date_deb_event"   placeholder="enter the date of this event (entre le premier et le 20 avril)" name="date_deb_event" required>
   
  </div>
  <div class="form-group">
   <h6> <label  class="form-label">End date of the event</label></h6>
    <input type="date" class="form-control" id="date_fin_event"  placeholder="enter the date of this event" name="date_fin_event" required >
   
  </div>
  <div class="form-group">
   <h6> <label  class="form-label">Image</label></h6>
    <input type="file" class="form-control" id="image" placeholder="image" name="image" placeholder="photo"   accept="image/png, image/jpeg" required >
   
  </div>
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
   </div>
	</form>
	</div>
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->

    </body>
    </html>