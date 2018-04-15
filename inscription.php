


<!DOCTYPE html>
<?php

session_start();
if (isset($_POST['submit'])) {
  $db=mysqli_connect('localhost','boly','boly', 'mediatech');
  $username=($_POST['username']);
  $email=filter_var(($_POST['email']));

  if (!filter_var($_POST['email'])) {
    echo "Votre adresse email n'est pas valide";
  }else
  $password=md5(($_POST['password_1']));
  $sql="INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  mysqli_query($db, $sql);

  if (!$sql) {
    
  }
 
header('location:video.php');
}



?>




<html>
<head>
	<title>INSCRIPTION</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


<?php
include 'partials/_header.php';
?>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<div class="container" style="margin-top:100px;">
     <form action="inscription.php" class="form-horizontal" style="width:100%" method="post" >
     	<h1 style="color: #1a0000"><center>SIGN UP FOR VIEWING OURS VIDEOS</center></h1>

     <fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-lg-4 control-label" for="Name"><span style="color: white">Name</span></label>  
  <div class="col-lg-4">
  <input id="Name" name="Name" type="text" placeholder="Name" class="form-control input-lg">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-lg-4 control-label" for="username"><span style="color: white">User Name</span></label>  
  <div class="col-lg-4">
  <input id="username" name="username" type="text" placeholder="User Name" class="form-control input-lg" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-lg-4 control-label" for="password"><span style="color: white">Password</span></label>
  <div class="col-lg-4">
    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-lg" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-lg-4 control-label" for="password4"><span style="color: white">Repeat Password</span></label>
  <div class="col-lg-4">
    <input id="password4" name="password4" type="password" placeholder="Repeat Password" class="form-control input-lg" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-lg-4 control-label" for="emailaddr"><span style="color: white">Email</span></label>  
  <div class="col-lg-4">
  <input id="emailaddr" name="email" type="text" placeholder="Email" class="form-control input-lg" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  
  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-lg-4 control-label" for="submit"></label>
  <div class="col-lg-4">
    <button id="submit" name="submit" class="btn btn-primary btn-lg"><span style="color: white">Submit</span></button>
    
  </div>
</div>

</fieldset>
</form>
<?php 
if(isset($erreur))
{
  echo '<font color="red">'.$erreur."</font>";
}

 ?>
<div class="container">
	<div class="row">
	</div>
</div>
       </div>
       
 <?php 
      include 'partials/_footer.php';
      ?>

</body>
</html>