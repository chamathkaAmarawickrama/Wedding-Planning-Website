<?php

$conn = mysqli_connect('localhost','root','','id19550502_wed_con') or die('connection failed');
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);
       header('location:contact.php');

      /* if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:report.php');

      } */
      /*elseif($row['user_type'] == 'patient'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:index.php');

      } */

   }
   else{
      $message[] = 'Incorrect Email or Password!!!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login - DMPD Dental</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

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
      <h2>login now</h2>
	  
	  <!--  <div><img src="images/login.jpg" >        -->
	  <div class="inputBox">
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
	  </div>
	  
      <input type="submit" name="submit" value="login now" class="btn">
	  
	  
     
	 
	 <!-- <a href="project/index.php" class="btn">login</a>-->
	</div>
	<h3>don't have an account? <a href="register.php">register now</a></h3> 
   </form>
   
   </section>
<?php @include 'footer.php'; ?>
</div>

</body>
</html>