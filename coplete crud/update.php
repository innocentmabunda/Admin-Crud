<?php 
include 'connect.php';
$id = $_GET['updateid'];
$sql="SELECT * FROM `users` WHERE 1";
$result=mysqli_query($con,$sql);
$row=mysqli_fetchs($result);

$username=$row['username'];
$email=$row['email'];

$password=$row['password'];

if(isset($_POST['submit'])){
  
  $username = $_POST['username'];
    $email = $_POST['email'];
   
    $password = $_POST['password'];

    $sql = "update `users` set id=$id, `email`='$email', `username`='$username', `password`='$password' where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
       // echo "Updated successfully";
       header("Location:index.php");
       
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
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Social Donors</title>
  </head>
  <body>
   <div class="container my-5">
   <form method="post">
  
  <div class="form-group">
      <label></label>
      <input type="text" class="form-control" placeholder=" Enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
 </div>
  <div class="form-group">
      <label></label>
      <input type="text" class="form-control" placeholder=" Enter your username" name="username" autocomplete="off" value=<?php echo $username; ?>>
 </div>
 <div class="mb-3">
  <label class="form-label"></label>
  <input class="form-control form-control-sm" id="formFileSm" type="file">
</div>
<div class="form-group">
      <label></label>
      <input type="text" class="form-control" placeholder=" Enter your password" name="password" autocomplete="off" value=<?php echo $password; ?>>
 </div>
 <div class="form-group">
      <label></label>
      <input type="text" class="form-control" placeholder="Confirm password" name="cpassword" autocomplete="off">
 </div><br>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
   </div>
  </body>
</html>
