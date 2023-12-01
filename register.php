<?php

$conn = mysqli_connect('localhost','root','','id19550502_wed_con') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
  

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$cpass')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register-Dream Day & Wedding Planner </title>

   <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>



<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<div class="container">
<?php @include 'header.php'; ?>
<section class="contact">

   <form action="" method="post">
   
   <div class="flex">
	<div>
      <h2 align="center">Register now</h2><br>
	  </div>
	  <div class="inputBox">
      <input type="text" name="name" placeholder="enter your name" required ><br>
	  
	  
      <input type="email" name="email" placeholder="enter your email" required><br>
	  
	  
      <input type="password" name="password" placeholder="enter your password" required class="inputBox"><br>
	  
	  
      <input type="password" name="cpassword" placeholder="confirm your password" required class="inputBox"><br>
	  
      </div>
	  <div>
      <input type="submit" name="submit" value="register now" class="btn"><br>
      <h3>already have an account? <a href="login.php">login now</a></h3>
	  </div>
	  </div>
	  
   </form>
   
 </section>
 
<?php @include 'footer.php'; ?>

</div>

</body>
</html>