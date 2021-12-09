<?php
include 'config.php';
$id=$_GET['updateid'];
$sql="Select * from `crudrecla` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$nom=$row['nom'];
$prenom=$row['prenom'];
$email=$row['email'];
$message=$row['message'];
$reponse=$row['reponse'];

if(isset($_POST['submit'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    $reponse=$_POST['reponse'];

    $sql="update `crudrecla` set id=$id,nom='$nom',prenom='$prenom',email='$email',message='$message',reponse ='$reponse' where id=$id" ;
    $result=mysqli_query($con,$sql);
    if($result){
    //    echo "updated successfully";
       header('location:display.php');

    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
 
    <title>Crud Reclamation</title>
  </head>
  <body>
    <div class="container my-5">

    <form method="post">
  <div class="form-group">
    <label >Nom</label>
    <input type="text" class="form-control" 
     placeholder="Entrer votre nom"
     name="nom" autocomplete="off" value=<?php echo $nom;?>>
  </div>
  
  <div class="form-group">
    <label >Prenom</label>
    <input type="text" class="form-control" 
     placeholder="Entrer votre prenom"
     name="prenom" autocomplete="off" value=<?php echo $prenom;?>>
  </div>

  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" 
     placeholder="Entrer votre email"
     name="email" autocomplete="off" value=<?php echo $email;?>>
  </div>

  <div class="form-group">
    <label >Message</label>
    <input type="text" class="form-control" 
     placeholder="Entrer votre message"
     name="message" autocomplete="off" value=<?php echo $message;?>>
  </div>
  <div class="form-group">
    <label >reponse</label>
    <input type="text" class="form-control" 
     placeholder="Entrer votre reponse"
     name="reponse" autocomplete="off" value=<?php echo $reponse;?>>
  </div>
  
  
  
  
  


 <button type="submit" class="btn btn-primary" name="submit">Update</button> 
</form>

    </div>


    
  </body>
</html>
