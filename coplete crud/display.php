<?php 
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social donors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
    </button>
        <button class="btn btn-primary my-5"><a href="../admin/index.html" class="text-light">Dashboard</a></button>


<table class="table">
    <thead>
        <tr>
            <th scope="col">no</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
        </tr>
      </thead>
      <tbody>


      <?php
      

      $sql="SELECT * FROM `users` WHERE 1";
      $result=mysqli_query($con,$sql);
      if($result){
          while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $email=$row['email'];
            $username=$row['username'];
            $password=$row['password'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$email.'</td>
            <td>'.$username.'</td>
            <td>'.$password.'</td>
            <td>
             <button class="btn btn-primary"><a href="update.php ? updateid='.$id.'" class="text-light">Update</a></button>  
             <button class="btn btn-danger"><a href="delete.php ? deleteid='.$id.'" class="text-light">Delete</a></button>   
            </td>
            </tr>';
          }
      }

      ?>
</tbody>
</table>
</div>

</body>
</html>