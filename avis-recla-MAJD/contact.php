<?php
include 'config.php';
if(isset($_POST['submit'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $rec=$_POST['rec'];
    $sql="insert into `crudrecla` (nom,prenom,email,message,rec)
    values('$nom','$prenom','$email','$message','$rec')";
    $result=mysqli_query($con,$sql);
    if($result){
       echo "<script>alert(\"Message envoyé\")</script>";

    }else{
        die(mysqli_error($con));
    }
}

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edu4You</title>
        <link rel="icon" type="image/x-icon" href="assets/icone.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/educc.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Nous Contacter</h1>
                            <span class="subheading">Avez vous des questions ? J'ai des réponses.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Voulez vous entrer en contact ? Remplissez le formulaire ci-dessous pour nous envoyer un message et nous vous répondrai dans les plus brefs délais!</p>
                        <!-- avis -->

                        <!-- avis -->
                    </div>

                </div>
                <div class="container my-5">
                    <form method="post">
                        <div class="d-flex justify-content-center d-flex d-flex align-items-start">
                            <div class="col-lg-6 border border-3 border-dark rounded p-3 me-3 ">
                                <div class="form-group">
                                    <label>Nom de reclamation</label>
                                    <input type="text" class="form-control" placeholder="Entrer votre nom de reclamation" name="rec" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" placeholder="Entrer votre nom" name="nom" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label>Prenom</label>
                                    <input type="text" class="form-control" placeholder="Entrer votre prenom" name="prenom" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Entrer votre email" name="email" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label>Message</label>
                                    <input type="text" class="form-control" placeholder="Entrer votre message" name="message" autocomplete="off">
                                </div>

                                <button type="submit" class="btn btn-dark" name="submit">Envoyer</button>
                                
                            </div>
                            <div class="col-lg-6 border border-5 border-dark p-3  ms-3">
                            
                                <button type="button" class="btn btn-dark" onclick="window.location.href = 'rec_user.php';" name="res">recherche reclamation</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container">
                    <h1 class="mt-5 mb-5">Système d'avis et d'évaluation</h1>
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                    <h1 class="text-warning mt-4 mb-4">
                                        <b><span id="average_rating">0.0</span> / 5</b>
                                    </h1>
                                    <div class="mb-3">
                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                        <i class="fas fa-star star-light mr-1 main_star"></i>
                                    </div>
                                    <h3><span id="total_review">0</span> Evaluations </h3>
                                </div>
                                <div class="col-sm-4">
                                    <p>
                                        <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                                        <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                                        </div>
                                    </p>
                                    <p>
                                        <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>

                                        <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                                        </div>
                                    </p>
                                    <p>
                                        <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>

                                        <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                                        </div>
                                    </p>
                                    <p>
                                        <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>

                                        <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                                        </div>
                                    </p>
                                    <p>
                                        <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>

                                        <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                                        </div>
                                    </p>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <h3 class="mt-4 mb-3">Donnez votre avis ici</h3>
                                    <button type="button" name="add_review" id="add_review" class="btn btn-dark">Evaluer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5" id="review_content"></div>
                </div>
            </div>
            <!-- avis -->
            <div id="review_modal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Submit Review</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
                        </div>
                        <div class="modal-body">
                            <h4 class="text-center mt-2 mb-4">
                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                                <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                            </h4>
                            <div class="form-group">
                                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
                            </div>
                            <div class="form-group">
                                <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                            </div>
                            <div class="form-group text-center mt-4">
                                <button type="button" class="btn btn-primary" id="save_review">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- avis -->
        </main>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
            var rating_data = 0;

            $('#add_review').click(function() {

                $('#review_modal').modal('show');

            });

            $(document).on('mouseenter', '.submit_star', function() {

                var rating = $(this).data('rating');

                reset_background();

                for (var count = 1; count <= rating; count++) {

                    $('#submit_star_' + count).addClass('text-warning');

                }

            });

            function reset_background() {
                for (var count = 1; count <= 5; count++) {

                    $('#submit_star_' + count).addClass('star-light');

                    $('#submit_star_' + count).removeClass('text-warning');

                }
            }

            $(document).on('mouseleave', '.submit_star', function() {

                reset_background();

                for (var count = 1; count <= rating_data; count++) {

                    $('#submit_star_' + count).removeClass('star-light');

                    $('#submit_star_' + count).addClass('text-warning');
                }

            });

            $(document).on('click', '.submit_star', function() {

                rating_data = $(this).data('rating');

            });

            $('#save_review').click(function() {

                var user_name = $('#user_name').val();

                var user_review = $('#user_review').val();

                if (user_name == '' || user_review == '') {
                    alert("Please Fill Both Field");
                    return false;
                } else {
                    $.ajax({
                        url: "submit_rating.php",
                        method: "POST",
                        data: {
                            rating_data: rating_data,
                            user_name: user_name,
                            user_review: user_review
                        },
                        success: function(data) {
                            $('#review_modal').modal('hide');

                            load_rating_data();

                            alert(data);
                        }
                    })
                }
                $('#save_review').click(function() {

                    var user_name = $('#user_name').val();

                    var user_review = $('#user_review').val();

                    if (user_name == '' || user_review == '') {
                        alert("Please Fill Both Field");
                        return false;
                    } else {
                        $.ajax({
                            url: "submit_rating.php",
                            method: "POST",
                            data: {
                                rating_data: rating_data,
                                user_name: user_name,
                                user_review: user_review
                            },
                            success: function(data) {
                                $('#review_modal').modal('hide');

                                load_rating_data();

                                alert(data);
                            }
                        })
                    }

                });

                load_rating_data();

                function load_rating_data() {
                    $.ajax({
                        url: "submit_rating.php",
                        method: "POST",
                        data: {
                            action: 'load_data'
                        },
                        dataType: "JSON",
                        success: function(data) {
                            $('#average_rating').text(data.average_rating);
                            $('#total_review').text(data.total_review);

                            var count_star = 0;

                            $('.main_star').each(function() {
                                count_star++;
                                if (Math.ceil(data.average_rating) >= count_star) {
                                    $(this).addClass('text-warning');
                                    $(this).addClass('star-light');
                                }
                            });

                            $('#total_five_star_review').text(data.five_star_review);

                            $('#total_four_star_review').text(data.four_star_review);

                            $('#total_three_star_review').text(data.three_star_review);

                            $('#total_two_star_review').text(data.two_star_review);

                            $('#total_one_star_review').text(data.one_star_review);

                            $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');

                            $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');

                            $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');

                            $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');

                            $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

                            if (data.review_data.length > 0) {
                                var html = '';

                                for (var count = 0; count < data.review_data.length; count++) {
                                    html += '<div class="row mb-3">';

                                    html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">' + data.review_data[count].user_name.charAt(0) + '</h3></div></div>';

                                    html += '<div class="col-sm-11">';

                                    html += '<div class="card">';

                                    html += '<div class="card-header"><b>' + data.review_data[count].user_name + '</b></div>';

                                    html += '<div class="card-body">';

                                    for (var star = 1; star <= 5; star++) {
                                        var class_name = '';

                                        if (data.review_data[count].rating >= star) {
                                            class_name = 'text-warning';
                                        } else {
                                            class_name = 'star-light';
                                        }

                                        html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
                                    }

                                    html += '<br />';

                                    html += data.review_data[count].user_review;

                                    html += '</div>';

                                    html += '<div class="card-footer text-right">On ' + data.review_data[count].datetime + '</div>';

                                    html += '</div>';

                                    html += '</div>';

                                    html += '</div>';
                                }

                                $('#review_content').html(html);
                            }
                        }
                    })
                }


            });
        </script>
    </body>

    </html>