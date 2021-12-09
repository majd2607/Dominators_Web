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
    <div class="container pt-5 mt-5">
      
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
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>


  <?php

$sql="Select * from `crudrecla`";
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
      <td>'.$nom.'</td>
      <td>'.$prenom.'</td>
      <td>'.$email.'</td>
      <td>'.$message.'</td>
      <td>'.$rec.'</td>
      <td>'.$reponse.'</td>
     
<td>
<button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
<button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
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