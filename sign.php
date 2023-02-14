<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

 //   $sql="INSERT INTO registration (username,password) values('$username','$password')";
 //  $result=mysqli_query($con,$sql);
//  if($result){
 //   echo "Data inserted Successfully"; 
//}
//else{
 //   die(mysqli_error($con)); 
//}
$sql="Select * from registration where username='$username'";

$result=mysqli_query($con,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        echo "User already exist";
    }
    else{
        $sql="INSERT INTO registration (username,password) values('$username','$password')";
  $result=mysqli_query($con,$sql);
if($result){
  echo "Signup successful";
  header('location:login.php');
}
else{
  die(mysqli_error($con));
}
    }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Signup page</title>
  </head>
  <body>
    <h1 class="text-center">Sign Up Page</h1>
    <div class="container mt-5">
    <form action="sign.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Username" name="username">
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
  </div>

  <button type="submit" class="btn btn-primary w-100">Signup</button>
</form>
</div>

   
  </body>
</html>