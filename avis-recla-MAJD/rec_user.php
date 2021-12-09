

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
    <label >nom de reclamation</label>
    <input type="text" class="form-control" 
     placeholder="Entrer votre nom rec"
     name="rec" autocomplete="off">
  </div>
  

 <button type="submit" class="btn btn-dark" name="submit">chercher</button> 
 
</form>

    </div>
   

    
  </body>
</html>
<?php

include 'config.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <div class="container">
       
       <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">rec</th>
      <th scope="col">reponse</th>
    
    </tr>
  </thead>
  <tbody>


  <?php
$rec=$_POST['rec'];
$sql="Select * from `crudrecla` where rec ='$rec'";
$result=mysqli_query($con,$sql);
if($result){ 
  while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $email=$row['email'];
      $message=$row['message'];
      $rec=$row['rec'];
      $reponse=$row['reponse'];

      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$nom.'</td>s
      <td>'.$prenom.'</td>
      <td>'.$email.'</td>
      <td>'.$message.'</td>
      <td>'.$rec.'</td>
      <td>'.$reponse.'</td>
 
</td>
    </tr>';
  }
}


?>


  </tbody>
</table>
    </div>       
</head>
<body>
    
</body>
</html>


